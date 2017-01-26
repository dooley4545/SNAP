/*!
 *
 *  Copyright (c) David Bushell | http://dbushell.com/
 *
 */
(function(window, document, undefined)
{

    // helper functions

    var trim = function(str)
    {
        return str.trim ? str.trim() : str.replace(/^\s+|\s+$/g,'');
    };

    var hasClass = function(el, cn)
    {
        return (' ' + el.className + ' ').indexOf(' ' + cn + ' ') !== -1;
    };

    var addClass = function(el, cn)
    {
        if (!hasClass(el, cn)) {
            el.className = (el.className === '') ? cn : el.className + ' ' + cn;
        }
    };

    var removeClass = function(el, cn)
    {
        el.className = trim((' ' + el.className + ' ').replace(' ' + cn + ' ', ' '));
    };

    var hasParent = function(el, id)
    {
        if (el) {
            do {
                if (el.id === id) {
                    return true;
                }
                if (el.nodeType === 9) {
                    break;
                }
            }
            while((el = el.parentNode));
        }
        return false;
    };

    // normalize vendor prefixes

    var doc = document.documentElement;

    var transform_prop = window.Modernizr.prefixed('transform'),
        transition_prop = window.Modernizr.prefixed('transition'),
        transition_end = (function() {
            var props = {
                'WebkitTransition' : 'webkitTransitionEnd',
                'MozTransition'    : 'transitionend',
                'OTransition'      : 'oTransitionEnd otransitionend',
                'msTransition'     : 'MSTransitionEnd',
                'transition'       : 'transitionend'
            };
            return props.hasOwnProperty(transition_prop) ? props[transition_prop] : false;
        })();

    window.App = (function()
    {

        var _init = false, app = { };

        var inner = document.getElementById('inner-wrap'),

            cover = document.getElementById('searchCover'),

            nav_open = false,

            nav_class = 'js-nav',

            cover_class = 'nav-visible'


        app.init = function()
        {
            if (_init) {
                return;
            }
            _init = true;

            var closeNavEnd = function(e)
            {
                if (e && e.target === inner) {
                    document.removeEventListener(transition_end, closeNavEnd, false);
                }
                nav_open = false;
            };

            app.closeNav =function()
            {
                if (nav_open) {
                    // close navigation after transition or immediately
                    var duration = (transition_end && transition_prop) ? parseFloat(window.getComputedStyle(inner, '')[transition_prop + 'Duration']) : 0;
                    if (duration > 0) {
                        document.addEventListener(transition_end, closeNavEnd, false);
                    } else {
                        closeNavEnd(null);
                    }
                }
                removeClass(doc, nav_class);
                removeClass(cover, cover_class);
            };

            app.openNav = function()
            {
                if (nav_open) {
                    return;
                }
                addClass(doc, nav_class);
                addClass(cover, cover_class);
                nav_open = true;

            };

            app.toggleNav = function(e)
            {
                if (nav_open && hasClass(doc, nav_class)) {
                    app.closeNav();
                } else {
                    app.openNav();
                }
                if (e) {
                    e.preventDefault();
                }
            };

            // open nav with main "nav" button
            document.getElementById('nav_open_btn').addEventListener('click', app.toggleNav, false);

            // close nav with main "close" button
            document.getElementById('nav-close-btn').addEventListener('click', app.toggleNav, false);

            //close nav with main "cover"
            document.getElementById('searchCover').addEventListener('click', app.closeNav, false);

            // close nav by touching the partial off-screen content
            document.addEventListener('click', function(e)
            {
                if (nav_open && !hasParent(e.target, 'nav')) {
                    e.preventDefault();
                    app.closeNav();
                }
            },
            true);

            addClass(doc, 'js-ready');

        };

        return app;

    })();

    if (window.addEventListener) {
        window.addEventListener('DOMContentLoaded', window.App.init, false);
    }

})(window, window.document);

// Side Nav - Adds necessary parts for nav to function properly

function sideNavigation() {
    // add panel class to li ** should not be needed, but bootstrap "needs" it to work properly (lame)** 
    $('.main-navigation #primary-menu li').addClass("panel");
    // add collapse button to appropriate li
    $('<button class="sub-menu-btn" type="button" data-toggle="collapse" data-parent="#primary-menu" aria-expanded="false"><i class="material-icons">&#xE5C5;</i></button>').prependTo("#primary-menu .menu-item-has-children");
    // add unique attributes to each sub-menu-btn instance
    var i = 0;
    $('.sub-menu-btn').each(function(){
        i++
        var ariaControls = 'collapse' + i,
            dataTarget = '#collapse' + i;
        // add incrementing aria-controls
        $(this).attr({'aria-controls': ariaControls, 'data-target': dataTarget}); 
    });
    // add collapse class to sub-menu
    $('.main-navigation .sub-menu').addClass('collapse');
    // add incrementing collapse ids
    $('.main-navigation .sub-menu').each(function(k,el){
        el.id = 'collapse' + (k+1); 
    });
    // for multi-level submenus, we'll modify the data-parent attribute ** You'll need to fix this to be more dynamic **
    $('.main-navigation .sub-menu .sub-menu-btn').attr('data-parent','#collapse4');
}
    
sideNavigation();

// Search UI

jQuery(document).ready(function($){
    var searchButton = $('.search-button'),
    searchBar = $('.search-bar'),
    searchClose = $('.search-close'),
    searchCover = $('.search-cover'),
    mainMenu = $('#nav_open_btn'),
    userMenu = $('#userMenu')

    function closeSearchBar(){
        searchButton.removeClass('search-bar-visible');
        searchBar.removeClass('is-visible');
        searchCover.removeClass('search-bar-visible');
    };

    searchButton.on('click touch', function(event){
        event.preventDefault();
        if(searchButton.hasClass('search-bar-visible')){
            searchBar.find('form').submit();
        } else {
            searchButton.addClass('search-bar-visible');
            searchCover.addClass('search-bar-visible');
            searchBar.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
                searchBar.find('input[type="search"]').focus().end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
            });
        }
    });

    //close search form
    searchBar.on('click', '.search-close', function(){
        closeSearchBar();
    });
    searchCover.on('click', function(){
        closeSearchBar();
    });
    mainMenu.on('click', function(){
        closeSearchBar();
    });
    userMenu.on('click', function(){
        closeSearchBar();
    });
    
    $(document).keyup(function(event){
        if( event.which=='27' ) closeSearchBar();
    });

});

// Set the height of the content, spacer and sidebar to be the same
var contentHeight = $('#main .content').height(),
    spacerHeight = $('#main .spacer');

spacerHeight.height(contentHeight);





