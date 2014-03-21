$(function(){
  $('#locationSearch').typeahead({                              
    name: 'locations',                                                             
    local: [
    'Salt Lake City',
    'Provo',
    'Ogden',
    'Bountiful',
    'Orem',
    'Centerville',
    'St. George',
    'Cedar City',
    'Hurricane',
    'Hartfield',
    'Hampton',
    'Hamtree',
    'Henderson',
    'Daegok',
    'Jincheon',
    'Wolbae',
    'Sangin',
    'Wolchon',
    'Songhyeon',
    'Seongdangmot',
    'Daemyeong',
    'Anjirang',
    'Banyawol',
    'Hyeonchungno',
    'Yeungnam Univ.',
    "Nat'l Univ. of Education",
    'Myeongdeok',
    'Banwoldang',
    'Jungangno',
    'Daegu Station',
    'Chilseong Market',
    'Sincheon',
    'Gaksan',
    'Dongdaegu Station',
    'Keungogae',
    'Ayanggyo',
    'Dongchon',
    'Haean',
    'Bangchon',
    'Yonggye',
    'Yulha',
    'Singi',
    'Ansim',
    'Munyang',
    'Dasa',
    'Daesil',
    'Gangchan',
    'Keimyung Univ.',
    'Seongseo',
    'Igok',
    'Yongsan',
    'Jukjeon',
    'Gamsam',
    'Duryu',
    'Naedang',
    'Bangogae',
    'Seomun Market',
    'Banwoldang',
    "Kyungpook Nat'l Univ. Hospital",
    'Daegu Bank',
    'Beomeo',
    'Suseong-gu Office',
    'Manchon',
    'Damti',
    'Yeonho',
    'Daegu Grand Park',
    'Gosan',
    'Sinmae',
    'Sawol',
    'Jeongpyeong',
    'Imdang',
    'Yeungnam Univ.',
    'Jung-gu',
    'Dong-gu',
    'Dalseo-gu',
    'Seo-gu',
    'Nam-gu',
    'Buk-gu',
    'Suseong-gu',
    'Camp Henry',
    'Camp Walker',
    'Camp George'

    ]                                                                           
})
}); 

// $('[data-toggle=collapse]').click(function(){

//     // toggle icon
//     $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");

// });

$('.collapse').on('show', function (e) {

    // hide open menus
    $('.collapse').each(function(){
      if ($(this).hasClass('in')) {
          $(this).collapse('toggle');
      }
  });

});

//hover dropdown
$(function(){

    $('ul.nav li.dropdown').hover(function(){
        $('.parentMenu', this).fadeIn('fast');
    }, function() {
        $('.parentMenu', this).fadeOut('fast');
    });
});

// makes the navbar dropdown a selector
// $(function(){

//    $(document.body).on('click', '.dropdown-menu li', function (event) {

//        var $target = $(event.currentTarget);
//        var icon_html = $target.find('span:first').clone().wrap('<p/>').parent().html();
//        var target_text = $target.find('a:first').text();

//        $target.closest('.btn-group')
//        .find('[data-bind="label"]').html(icon_html + target_text)
//        .end()
//      // .children('.dropdown-toggle').dropdown('toggle');

//      return false;

//  });
// });

$(function(){

    $('.dropdown-menu li').on('click', function(evt){
        var $tar,
        $navBarIcon,
        newIconClass;
        

        $tar = $(evt.target);
        //find the text of search-category class and set it to the text of target
        $('#search-category').text(" " + $tar.text());
        $navBarIcon = $('#search-icon');
        //removes previous class from search icon
        $navBarIcon.removeClass($navBarIcon.get(0).classList[1]);
        //if target has a glyphicon
        if($tar.find('.glyphicon').length){
        //get the second class name
            newIconClass = $tar.find('.glyphicon').get(0).classList[1];
        } else {
        //if target doesn't have a glyphicon get the parent icon
            newIconClass = $tar.closest('.dropdown').find('.glyphicon').get(0).classList[1];
        }
        //updates search icon with new class
        $navBarIcon.addClass(newIconClass);


    })

 // $(document.body).on('click', '.dropdown-menu li', function (event) {

 //     var $target = $(event.currentTarget);
 //     var icon_html = $target.find('span:first').clone().wrap('<p/>').parent().html();
 //     var $parent_maybe = $target.parents('.dropdown:last');
 //     if($parent_maybe.length) {
 //         icon_html = $parent_maybe.find('span:first').clone().wrap('<p/>').parent().html();
 //     }
 //     var target_text = $target.find('a:first').text()

 //     $target.closest('.btn-group')
 //     .find('[data-bind="label"]').html(icon_html + target_text)
 //     .end()
 //     .children('.dropdown-toggle').dropdown('toggle');

 //     return false;

 // });
});

$('.list-group-item').on('click',function(){
    $(".list-group-item.active").removeClass("active");
    $(this).addClass('active');
});
