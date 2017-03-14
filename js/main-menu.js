jQuery(document).ready(function($){
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('.site-nav').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('.site-wrapper').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('.site-wrapper').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}

});

// Side Nav - Adds necessary parts for nav to function properly

function sideNavigation() {
    // add panel class to li ** should not be needed, but bootstrap "needs" it to work properly (lame)** 
    $('.slide-navigation #primary-menu li').addClass("panel");
    // add collapse button to appropriate li
    $('<button class="sub-menu-btn" type="button" data-toggle="collapse" data-parent="#primary-menu" aria-expanded="true"><i class="material-icons">&#xE5C5;</i></button>').prependTo("#primary-menu .menu-item-has-children");
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
    $('.slide-navigation .sub-menu').addClass('collapse');
    // add incrementing collapse ids
    $('.slide-navigation .sub-menu').each(function(k,el){
        el.id = 'collapse' + (k+1); 
    });
    // for multi-level submenus, we'll modify the data-parent attribute ** You'll need to fix this to be more dynamic **
    $('.slide-navigation .sub-menu .sub-menu-btn').attr('data-parent','#collapse4');
}
    
sideNavigation();

// Main Menu UI
jQuery(document).ready(function($){
    var body = $('body'),
    page = $('#page'),
    // enableScroll = $(window).scroll().enable();
    // Search Elements
    searchBtn = $('.search-button')
    searchBar = $('.search-bar'),
    searchClose = $('.search-close'),
    // User Menu elements
    userMenuBtn = $('.user-button'),
    userMenuSlide = $('#user-slide'),
    userMenuClose =$('#user-slide-close'),
    // Side Nav elements
    navBtn = $('.nav-button'),
    navSlide = $('#nav-slide'),
    navClose =$('#nav-slide-close'),
    // Content Cover
    contentCover = $('#contentCover');
    // Open Search Bar
    function openSearchBar(){
        // Add Body Class
        body.addClass('no-scroll');
        // Add Page Class
        page.addClass('ui-active');
        // Add classes to search elements
        searchBtn.addClass('search-bar-visible');
        contentCover.addClass('search-bar-visible');
        searchBar.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
            searchBar.find('input[type="search"]').focus().end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
        });
    }
    // Open User Slide
    function openUserSlide(){
        // Add Body Class
        body.addClass('no-scroll');
        // Add Page Class
        page.addClass('ui-active');
        // Add classes to user elements
        userMenuBtn.addClass('slide-visible');
        userMenuSlide.addClass('is-visible');
        contentCover.addClass('slide-visible');
    };
    // Open Nav Slide
    function openNavSlide(){
        // Add Body Class
        body.addClass('no-scroll');
        // Add Page Class
        page.addClass('ui-active');
        // Add classes to nav elements
        navBtn.addClass('slide-visible');
        navBtn.html('<i class="material-icons">&#xE5CD;</i>');
        navSlide.addClass('is-visible');
        contentCover.addClass('slide-visible');
    };
    // Close Search Bar
    function closeSearchBar(){
        // Add Body Class
        body.removeClass('no-scroll');
        // Remove page class
        page.removeClass('ui-active');
        // Remove classes on Search Elements
        searchBtn.removeClass('search-bar-visible');
        searchBar.removeClass('is-visible');
        contentCover.removeClass('search-bar-visible');
    };
    // Close User Slide
    function closeUserSlide(){
        // Add Body Class
        body.removeClass('no-scroll');
        // Remove page class
        page.removeClass('ui-active');
        // Remove classes on User Menu Elements
        userMenuBtn.removeClass('slide-visible');
        userMenuSlide.removeClass('is-visible');
        contentCover.removeClass('slide-visible');
    };
    // Close Nav Slide
    function closeNavSlide(){
        // Add Body Class
        body.removeClass('no-scroll');
        // Remove page class
        page.removeClass('ui-active');
        // Remove classes on Nav Elements
        navBtn.removeClass('slide-visible');
        navBtn.html('<i class="material-icons">&#xE5D2;</i>');
        navSlide.removeClass('is-visible');
        contentCover.removeClass('slide-visible');
    };
    // Search Bar
    searchBtn.on('click touch', function(event){
        event.preventDefault();
        if(searchBtn.hasClass('search-bar-visible')){
            searchBar.find('form').submit();
        } else if(userMenuBtn.hasClass('slide-visible')){
            closeUserSlide();
            openSearchBar();
        } else if(navBtn.hasClass('slide-visible')){
            closeNavSlide();
            openSearchBar();
        } else {
            openSearchBar();
        }
    });
    // User Menu Slide
    userMenuBtn.on('click touch', function(event){
        event.preventDefault();
        if($(this).hasClass('slide-visible')){
           closeUserSlide(); 
        } else if(searchBtn.hasClass('search-bar-visible')){
            closeSearchBar();
            openUserSlide();
        } else if(navBtn.hasClass('slide-visible')){
            closeNavSlide();
            openUserSlide();
        } else {
            openUserSlide();
        }
    });
    // Navigation Slide
    navBtn.on('click touch', function(event){
        event.preventDefault();
        if($(this).hasClass('slide-visible')){
           closeNavSlide();
        } else if(searchBtn.hasClass('search-bar-visible')){
            closeSearchBar();
            openNavSlide(); 
        } else if(userMenuBtn.hasClass('slide-visible')){
            closeUserSlide();
            openNavSlide();
        } else {
            openNavSlide();
        }
    });
    // Close Search Form
    searchClose.on('click', function(){
        closeSearchBar();
    });
    // Close User Menu Button
    userMenuClose.on('click', function(){
        closeUserSlide();
    });
    // Close Nav Button
    navClose.on('click', function(){
        closeNavSlide();
    });
    // Select Content Cover, close active menu
    contentCover.on('click touch swipe', function(){
        closeSearchBar();
        closeUserSlide();
        closeNavSlide();
    });

    $(document).keyup(function(event){
        if( event.which=='27' ) closeSearchBar();
    });
});

// Set the height of the content, spacer and sidebar to be the same
var contentHeight = $('#main .content').height(),
    spacerHeight = $('#main .spacer');

spacerHeight.height(contentHeight);