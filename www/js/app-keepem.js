var keepem = {
    //myPlayer,myVote,percent_d,percent_k;
    config: { 
		canonical: document.querySelector("link[rel='canonical']").getAttribute("href"),
        gender: 'HIM',
        team: '',
        year: '',
        description: '',
        version: '',
    },
    update_config: function(config) {
        // Take an external config object and update this config object.
        for ( var key in config )
        {
            if ( config.hasOwnProperty(key) )
            {
                this.config[key] = config[key];
            }
        }
    },
    slugify: function (text) {
        // from https://gist.github.com/mathewbyrne/1280286
        return text.toString().toLowerCase()
            .replace(/\s+/g, '-')           // Replace spaces with -
            .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
            .replace(/\-\-+/g, '-')         // Replace multiple - with single -
            .replace(/^-+/, '')             // Trim - from start of text
            .replace(/-+$/, '');            // Trim - from end of text
    },
    get_players: function() {
        $.getJSON('js/players.json' + this.config.version, function(data) {
      
            $.each(data, function(i, item) {
                //console.log(i, item);
                if ( item.name == '' ) return;
                if ( item.name == 'ad' )
                {
                    if( !is_mobile ) $('#'+item.position).append('<div id="box_ad" class="large-4 medium-6 small-12 columns left"><div id="div-gpt-ad-1423507761396-1"><script>googletag.cmd.push(function(){ googletag.display("div-gpt-ad-1423507761396-1"); });</script></div></div>'); 
                    return;
                }

                var lastname = item.name.split(" ")[1];
                var firstname = item.name.split(" ")[0];
                var photo = keepem.slugify(firstname)+"_"+ keepem.slugify(lastname)+".jpg";

                // Allow us to override the id var if we need to
                if ( item.hasOwnProperty('id') ) i = item.id;
                else i += 1;
                // ^ That's because i is 0-indexed, but mysql id's are 1-indexed.

                if ( document.location.hash == '#dev' ) query += "INSERT INTO kd_" + keepem.config.team.toLowerCase() + " (name, year, section, keep, dump) VALUES ('" + item.name.replace("'", "\\'") + "', '" + keepem.config.year + "', '" + item.position + "', 0, 0);";

                if(item.name == "promo")
                {
                    $('#players').append('<div id="'+i+'" first="'+i+'" class="large-4 medium-6 small-12 columns left"><a href="http://www.nydailynews.com/entertainment/golden-globes-2016-best-worst-red-carpet-gallery-1.2491685" target="new"><img src="img/gg_promo.jpg"></a></div>')
                }
                else if(item.name == "promo2")
                {
                    $('#players').append('<div id="'+i+'" first="'+i+'" class="large-4 medium-6 small-12 columns left"><a href="http://www.nydailynews.com/entertainment/golden-globes-2016-best-worst-red-carpet-gallery-1.2491685" target="new"><img src="img/gg_promo2.jpg"></div></a>')
                }
                else 
                {
                    $('#'+item.position).append('\n\
<div id="'+i+'" first="'+i+'" class="large-4 medium-6 small-12 columns left">\n\
    <img alt="'+item.name+' photo" src="img/'+photo+'">\n\
    <div id="'+i+'_vote" class="panel">\n\
        <p class="name">'+item.name+'</p>\n\
        <button id="0" class="button radius keep">KEEP ' + keepem.config.gender + '</button>\n\
        <button id="1" class="button radius dump">DUMP ' + keepem.config.gender + '</button>\n\
    </div>\n\
    <div id="'+i+'_results" class="panel results">\n\
        <div class="your_vote" style="font-size:10px;">YOUR VOTE</div>\n\
        <div>\n\
            <div>DUMP ' + keepem.config.gender + '</div>\n\
            <div class="dump_bar"></div>\n\
            <div class="dump_result_num result_num"></div>\n\
        </div>\n\
        <div class="keep_holder">\n\
            <div>KEEP ' + keepem.config.gender + '</div>\n\
            <div class="keep_bar"></div>\n\
            <div class="keep_result_num result_num"></div>\n\
        </div>\n\
    </div>\n\
    <div class="social">\n\
        <a class="fb-share" href="http://www.facebook.com/sharer.php?u=' + keepem.config.canonical + '" target="_blank"><div class="facebook" class="small-text-center"></div></a>\n\
        <a class="tweet" href="https://twitter.com/share?url=' + keepem.config.canonical + '&text=' + keepem.config.description + '" target="_blank"><div class="twitter"></div></a>\n\
    </div>\n\
</div>');
                    if ( item.credit != '' ) $("#credits").append(item.name+", "+item.credit+"; ");
                }

                if( !is_mobile ) {
                    $("#box_ad").show();
                }
                else
                {
                    $("#box_ad").hide();
                }
            });
            $(".button").on('click', function() {
                var player_id = $(this).parent().parent().attr('id');
                var player_first = $(this).parent().parent().attr('first');
                var player_name = $(this).parent().text().split("KEEP")[0];
                $('#'+player_id+"_vote").hide();
                $('#'+player_id+"_results").fadeIn('slow');
                $("#"+player_id).find(".social").fadeIn('slow');
                var vote = ($(this).attr("id"));
                keepem.get_vote(vote, player_id, player_first, player_name.trim())
            });
        });
        if ( document.location.hash == '#dev' ) console.log(query);
    },
    get_vote: function (int, player, firstname, player_name) {
        var random = this.make_id();

        jQuery.get("php/vote.php?vote="+int+"&player="+player+"&year="+this.config.year+"&"+random, function(data)
        {
            keep = eval(data.split("||")[0]);
            dump = eval(data.split("||")[1]);

            console.log(player_name)
            percent_k = Math.round((keep/(dump+keep))*100);
            percent_d = Math.round((dump/(dump+keep))*100);
            if(int == 0)
            {
                $("#"+player).find(".your_vote").addClass("keep");
                $("#"+player).find(".tweet").attr("href", "https://twitter.com/share?url=" + keepem.config.canonical + "&text=I voted to keep "+player_name+". Cast your " + keepem.config.team + " Keep 'em, Dump 'em vote now:")
            }
            else
            {
                $("#"+player).find(".your_vote").addClass("dump");
                $("#"+player).find(".tweet").attr("href", "https://twitter.com/share?url=" + keepem.config.canonical + "&text=I voted to dump "+player_name+". Cast your Keep 'em, Dump 'em vote now:")
            }
            $("#"+player).find(".clear").attr("vote", int)
            $("#"+player).find(".dump_bar").css('width', percent_d/2+"%");
            $("#"+player).find(".keep_bar").css('width', percent_k/2+"%");
            $("#"+player).find(".keep_result_num").html(percent_k+"%");
            $("#"+player).find(".dump_result_num").html(percent_d+"%");

            if(percent_d != 100)
            {
                $("#"+player).find(".keep_holder").css("left", "-"+(percent_d/2)-12+"%");
            }
            else
            {
                $("#"+player).find(".keep_holder").css("left", "-65%");   
            }
            if(percent_k == 100)
            {
                $("#"+player).find(".keep_holder").css("left", "-9%");
            }
        });
    },
    make_id: function()
    {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    },
    init: function() 
    {
        // Config handling. External config objects must be named quiz_config
        if ( typeof window.app_config !== 'undefined' ) { this.update_config(app_config); }

        if( is_mobile )
        {
          var waypoint = new Waypoint({
            element: document.getElementById('m_bottom_ad'),
            handler: function(direction) {}
          });
          
          var banner_sticky = new Waypoint.Sticky({
            element: $('#m_bottom_ad')[0]
          });
        }
        this.get_players();
    }
};
var is_mobile = /Android|webOS|iPhone|iPad|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var query = '';
