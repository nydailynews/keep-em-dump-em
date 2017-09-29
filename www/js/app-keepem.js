// https://pudymody.github.io/blog/2015-08-09-tinder-like-swipe
var keepem = {
    player_count: 0,
    votes: {
        total: 0,
        keep: 0,
        dump: 0,
        section: {}
    },
    config: { 
        canonical: document.querySelector("link[rel='canonical']").getAttribute("href"),
        gender: 'HIM',
        team: '',
        year: '',
        description: '',
        version: '',
        ads: ['div-gpt-ad-1423507761396-1', 'div-gpt-ad-1423507761396-2', 'div-gpt-ad-1423507761396-3'],
        promos: ['<div class="large-4 medium-6 small-12 columns left"><a href="http://www.nydailynews.com/entertainment/golden-globes-2016-best-worst-red-carpet-gallery-1.2491685" target="new"><img src="img/gg_promo.jpg"></a></div>'],
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
        $.getJSON('js/players.json?' + this.config.version, function(data) {
      
            $.each(data, function(i, item) {
                if ( item.name == '' ) return;
                if ( item.name == 'ad' )
                {
                    if ( keepem.config.ads.length === 0 ) return;
                    var ad = keepem.config.ads.pop()
                    if ( !is_mobile ) $('#'+item.section).append('<div class="box_ad large-4 medium-6 small-12 columns left"><div id="' + ad + '"><script>googletag.cmd.push(function(){ googletag.display("' + ad + '"); });</script></div></div>'); 
                    return;
                }

                var lastname = item.name.split(" ")[1];
                var firstname = item.name.split(" ")[0];
                var photo = 'img/' + keepem.slugify(firstname)+"_"+ keepem.slugify(lastname)+".jpg";
                if ( item.hasOwnProperty('photo') && item.photo !== '' ) photo = item.photo;

                if ( item.hasOwnProperty('title') && item.title !== '' ) item.name += '<span><span style=\'display:none;\'>TITLE:</span>' + item.title + '</span>';

                // See if there's a gender specified in the json, otherwise just use the config value.
                var gender = keepem.config.gender;
                if ( item.hasOwnProperty('gender') && item.gender !== '' ) gender = item.gender;

                // Allow us to override the id var if we need to
                if ( item.hasOwnProperty('id') ) i = item.id;
                else i += 1;
                // ^ That's because i is 0-indexed, but mysql id's are 1-indexed.

                if ( document.location.hash == '#dev' ) query += "INSERT INTO kd_" + keepem.config.team.toLowerCase() + " (name, year, section, keep, dump) VALUES ('" + item.name.replace("'", "\\'") + "', '" + keepem.config.year + "', '" + item.section + "', 0, 0);";

                if ( item.name == "promo" )
                {
                    if ( keepem.config.promos.length === 0 ) return;
                    var promo = keepem.config.promos.pop();
                    $('#players').append(promo);
                }
                else 
                {
                    $('#'+item.section).append('\n\
<div id="'+i+'" first="'+i+'" class="large-4 medium-6 small-12 columns left">\n\
    <img alt="'+item.name+' photo" src="'+photo+'">\n\
    <div id="'+i+'_vote" class="panel">\n\
        <p class="name">'+item.name+'</p>\n\
        <button name="0" class="button radius keep">KEEP ' + gender + '</button>\n\
        <button name="1" class="button radius dump">DUMP ' + gender + '</button>\n\
    </div>\n\
    <div id="'+i+'_results" class="panel results">\n\
        <div class="your_vote">Your vote</div>\n\
        <div>\n\
            <div>DUMP ' + gender + '</div>\n\
            <div class="dump_bar"></div>\n\
            <div class="dump_result_num result_num"></div>\n\
        </div>\n\
        <div class="keep_holder">\n\
            <div>KEEP ' + gender + '</div>\n\
            <div class="keep_bar"></div>\n\
            <div class="keep_result_num result_num"></div>\n\
        </div>\n\
    </div>\n\
    <div class="social">\n\
        <a class="fb-share" href="https://www.facebook.com/sharer.php?u=' + keepem.config.canonical + '" target="_blank"><div class="facebook" class="small-text-center"></div></a>\n\
        <a class="tweet" href="https://twitter.com/share?url=' + keepem.config.canonical + '&text=' + keepem.config.description + '&via=nydni" target="_blank"><div class="twitter"></div></a>\n\
    </div>\n\
</div>');
                    if ( item.credit != '' ) $("#credits").append(item.name+", "+item.credit+"; ");
                }
                // Handle the stat-keeping for the end-of-poll tallies
                keepem.player_count += 1;
                if ( !keepem.votes.section.hasOwnProperty(item.section) ) 
                {
                    keepem.votes.section[item.section] = { keep: 0, dump: 0 }
                }
            });
            $(".button").on('click', function() {
                var player_id = $(this).parent().parent().attr('id');
                var player_first = $(this).parent().parent().attr('first');
                var player_name = $(this).parent().text().split("KEEP")[0];
                var section = $(this).parent().parent().parent().attr('id');
                $('#'+player_id+"_vote").hide();
                $('#'+player_id+"_results").fadeIn('slow');
                $("#"+player_id).find(".social").fadeIn('slow');
                var vote = ($(this).attr("name"));
                keepem.get_vote(vote, player_id, player_first, player_name.trim());

                // ENDVOTE
                keepem.votes.total += 1;
                var kd = 'keep';
                // ****NOPE
                if ( vote == 0 ) kd = 'dump';
                keepem.votes[kd] += 1;
                keepem.votes.section[section][kd] += 1;
                if ( keepem.votes.total == keepem.player_count ) keepem.finish();
            });
        });
        if ( document.location.hash == '#dev' ) console.log(query);
    },
    trigger_all: function (action) {
        if ( action !== 'keep' ) action = 'dump';
        $("." + action).trigger("click");
    },
    get_vote: function (int, player, firstname, player_name) {
        var random = this.rando();

        console.log(player, firstname, player_name);
        jQuery.get("php/vote.php?vote="+int+"&player="+player+"&year="+this.config.year+"&"+random, function(data)
        {
            keep = eval(data.split("||")[0]);
            dump = eval(data.split("||")[1]);

            percent_k = Math.round((keep/(dump+keep))*1000)/10;
            percent_d = Math.round((dump/(dump+keep))*1000)/10;
            // A fix for when we include titles in the cards.
            if ( player_name.indexOf('TITLE:') > 0 )
            {
                player_name = player_name.split('TITLE:')[0];
            }
            if (int == 0)
            {
                $("#"+player).find(".your_vote").addClass("keep");
                $("#"+player).find(".tweet").attr("href", "https://twitter.com/share?url=" + keepem.config.canonical + "&text=I voted to keep "+player_name+". Cast your " + keepem.config.team + " Keep 'em, Dump 'em vote now:&via=nydni")
            }
            else
            {
                $("#"+player).find(".your_vote").addClass("dump");
                $("#"+player).find(".tweet").attr("href", "https://twitter.com/share?url=" + keepem.config.canonical + "&text=I voted to dump "+player_name+". Cast your Keep 'em, Dump 'em vote now:&via=nydni")
            }
            $("#"+player).find(".clear").attr("vote", int)
            $("#"+player).find(".dump_bar").css('width', Math.floor(percent_d/2)+"%");
            $("#"+player).find(".keep_bar").css('width', Math.floor(percent_k/2)+"%");
            $("#"+player).find(".keep_result_num").html(percent_k+"%");
            $("#"+player).find(".dump_result_num").html(percent_d+"%");
        });
    },
    finish: function() {
        // Do some fun things for the reader when they've made all their votes.
        // Like show a new ad.
        // ENDVOTE
        var rando = this.rando();
        var query = jQuery.param(this.votes);
        var final_markup = '<h3 class="callout"><a href="#" onclick="keepem.view_results();">View Total Keep \'Em Dump \'Em Results</a></h3>';
        jQuery('main').prepend(final_markup);
        jQuery('main').append(final_markup);
        jQuery.get("php/vote.php?vote=final&"+query+"&year="+this.config.year+"&"+rando, function(data)
        {
            //{"keep_avg":"30.0000","dump_avg":"9.0000","percent_avg":"0.7692000269889832","more_dumpy":"0","more_optimistic":"0","dumped":[{"name":"Mr. Met","percent":"0.0000"},{"name":"Training Staff","percent":"0.0000"},{"name":"Jeff Wilpon","percent":"0.0000"},{"name":"Jerry Blevins","percent":"0.0000"},{"name":"Chasen Bradford","percent":"0.0000"}],"kept":[{"name":"Jeurys Familia","percent":"1.0000"},{"name":"Chris Flexen","percent":"1.0000"},{"name":"Tommy Milone","percent":"1.0000"},{"name":"Hansel Robles","percent":"1.0000"},{"name":"Noah Syndergaard","percent":"1.0000"}]}
            keepem.data = data;
        });
    },
    view_results: function() {
        // Wipe the page and put the final results on there.
        if ( typeof googletag !== 'undefined' ) googletag.pubads().refresh();
        if ( typeof PARSELY !== 'undefinted' ) PARSELY.beacon.trackPageView({ url: document.location.href, urlref: document.location.href, js: 1 });

        var d = JSON.parse(this.data);
        jQuery('.callout').remove();
        var dump_percent = this.to_percent(this.votes.dump/this.votes.total);
        var keep_percent = this.to_percent(this.votes.keep/this.votes.total);
        var avg_keep_percent = this.to_percent(d.percent_avg);
        var kept = '', dumped = '';
        var vote_text = 'You voted to dump ' + this.votes.keep + ' out of ' + this.votes.total + ' times (' + keep_percent + ' percent).\n\
On average, readers voted to dump ' + Math.floor(d.keep_avg*10)/10 + ' (' + avg_keep_percent + ' percent).\n\
';
        var vote_text_tweet = this.tweet_link(vote_text.replace('You voted', 'On the ' + this.config.team + ' Keep Em Dump Em I voted').replace(' percent','%25').replace(' percent','%25').replace('.On average, r', ' R'));
        var len = d['kept'].length;
        var kept_blurb = ' voted to keep', dumped_blurb = ' voted to keep';
        for ( var i = 0; i < len; i ++ ) {
            kept += '   <li>' + d['kept'][i]['name'] + ': ' + this.to_percent(d['kept'][i]['percent']) + '%' + kept_blurb + '</li>\n';
            dumped += '   <li>' + d['dumped'][i]['name'] + ': ' + this.to_percent(d['dumped'][i]['percent']) + '%' + dumped_blurb + '</li>\n';
            kept_blurb = '', dumped_blurb = '';
        }
        jQuery('#players').html('<h2 class="callout">Final Results</h2>\n\
<p>\n\
' + vote_text + vote_text_tweet + '\n\
</p>\n\
<p>\n\
    These are the most-kept and most-dumped players overall:\n\
</p>\n\
    <h3>Most Kept</h3>\n\
    <ol>' + kept + '</ol>\n\
    <h3>Most Dumped</h3>\n\
    <ol>' + dumped + '</ol>\n\
');
    },
    tweet_link: function(text) {
        // Given the words to put in a tweet, return markup suitable for a tweet-this link.
        var url = document.location.origin + document.location.pathname;
        return '<span><a href="https://twitter.com/intent/tweet?text=' + text + '&amp;url=' + url + '&amp;via=NYDNSports&amp;related=NYDNi,NYDailyNews" target="_blank">Tweet this</a></span>';
    },
    to_percent: function(val) {
        // Turn a float value between 0 and 1.0 into a percent value to one decimal place, 0.0% to 100.0%.
        return Math.round(val*1000)/10;
    }, 
    rando: function()
    {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for ( var i=0; i < 8; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));

        return text;
    },
    init: function() 
    {
        // Config handling. External config objects must be named quiz_config
        if ( typeof window.app_config !== 'undefined' ) { this.update_config(app_config); }

        if ( is_mobile )
        {
          var banner_sticky = new Waypoint.Sticky({
            element: $('#m_bottom_ad')[0]
          });
        }
        this.get_players();
    }
};
var is_mobile = /Android|webOS|iPhone|iPad|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var query = '';
