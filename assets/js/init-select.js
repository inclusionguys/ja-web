 $(function(){
    var customers = $.get( "../../dashboard/merchantcustomers");
    console.log('cust' + customers.responseText);


    $("#select-location").selectize({
        options: [
        {slug:'Nairobi-CBD '        ,   road: 'cbd',        location:           'Nairobi CBD '                      },
        {slug:'Fourways-Junction'   ,   road: 'thikaroad',  location:           'Fourways Junction'                      },
        {slug:'Gigiri'              ,   road: 'thikaroad',  location:           'Gigiri'                      },
        {slug:'Highrise'            ,   road: 'thikaroad',  location:           'Highrise'                      },
        {slug:'Hurlingham'          ,   road: 'thikaroad',  location:           'Hurlingham'                      },
        {slug:'Industrial-Area '    ,   road: 'thikaroad',  location:           'Industrial Area '                      },
        {slug:'Karen'               ,   road: 'langatard',  location:           'Karen'                      },
        {slug:'Karen-Hardy'         ,   road: 'langatard',  location:           'Karen Hardy'                      },
        {slug:'Karen-Miotoni'       ,   road: 'langatard',  location:           'Karen Miotoni'                      },
        {slug:'Karen-Plains'        ,   road: 'langatard',  location:           'Karen Plains'                      },
        {slug:'Karen-Windy-Ridge'   ,   road: 'thikaroad',  location:           'Karen Windy Ridge'                      },
        {slug:'Kasarani'            ,   road: 'thikaroad',  location:           'Kasarani'                      },
        {slug:'Kiambu'              ,   road: 'thikaroad',  location:           'Kiambu'                      },
        {slug:'Kileleshwa'          ,   road: 'thikaroad',  location:           'Kileleshwa'                      },
        {slug:'Kilimani'            ,   road: 'thikaroad',  location:           'Kilimani'                      },
        {slug:'Kitusuru'            ,   road: 'thikaroad',  location:           'Kitusuru'                      },
        {slug:'Langata'             ,   road: 'thikaroad',  location:           'Langata'                      },
        {slug:'Lavington'           ,   road: 'thikaroad',  location:           'Lavington'                      },
        {slug:'Loresho'             ,   road: 'thikaroad',  location:           'Loresho'                      },
        {slug:'Lower-Kabete'        ,   road: 'thikaroad',  location:           'Lower Kabete'                      },
        {slug:'Mombasa-Road'        ,   road: 'thikaroad',  location:           'Mombasa Road'                      },
        {slug:'Muthaiga'            ,   road: 'limururd',   location:           'Muthaiga'                      },
        {slug:'Nairobi-West'        ,   road: 'thikaroad',  location:           'Nairobi West'                      },
        {slug:'New-Muthaiga'        ,   road: 'thikaroad',  location:           'New Muthaiga'                      },
        {slug:'Ngei'                ,   road: 'thikaroad',  location:           'Ngei'                      },
        {slug:'Ngong-Road'          ,   road: 'thikaroad',  location:           'Ngong Road'                      },
        {slug:'Ngumo'               ,   road: 'thikaroad',  location:           'Ngumo'                      },
        {slug:'Nyari'               ,   road: 'thikaroad',  location:           'Nyari'                      },
        {slug:'Old-Muthaiga'        ,   road: 'thikaroad',  location:           'Old Muthaiga'                      },
        {slug:'Parklands'           ,   road: 'thikaroad',  location:           'Parklands'                      },
        {slug:'Roselyn'             ,   road: 'thikaroad',  location:           'Roselyn'                      },
        {slug:'Ruaraka'             ,   road: 'thikaroad',  location:           'Ruaraka'                      },
        {slug:'Runda'               ,   road: 'thikaroad',  location:           'Runda'                      },
        {slug:'South B'             ,   road: 'thikaroad',  location:           'South B'                      },
        {slug:'South C'             ,   road: 'thikaroad',  location:           'South C'                      },
        {slug:'Spring-Valley'       ,   road: 'thikaroad',  location:           'Spring Valley'                      },
        {slug:'UN-Gigiri'          ,   road: 'limururd',   location:           'U.N/Gigiri'                      },
        {slug:'Upper-Hill'          ,   road: 'thikaroad',  location:           'Upper Hill'                      },
        {slug:'Valley-Arcade'       ,   road: 'thikaroad',  location:           'Valley Arcade'                      },
        {slug:'Westlands'           ,   road: 'thikaroad',  location:           'Westlands'                      },
        {slug:'Windsor'             ,   road: 'thikaroad',  location:           'Windsor'                      },
        {slug:'Woodley'             ,   road: 'thikaroad',  location:           'Woodley'                      },
        {slug:'Ngumo-Estate'        ,   road: 'thikaroad',  location:           'Ngumo Estate'                      },
        {slug:'Embakasi'            ,   road: 'thikaroad',  location:           'Embakasi'                      },
        {slug:'donholm'             ,   road: 'thikaroad',  location:           'donholm'                      },
        {slug:'Pipeline'            ,   road: 'thikaroad',  location:           'Pipeline'                      },
        {slug:'Tumaini-Estate'      ,   road: 'thikaroad',  location:           'Tumaini Estate'                      },
        {slug:'Fedha-Estate'        ,   road: 'thikaroad',  location:           'Fedha Estate'                      },
        {slug:'Madaraka'            ,   road: 'thikaroad',  location:           'Madaraka'                      },
        {slug:'Carnivore'           ,   road: 'thikaroad',  location:           'Carnivore'                      },
        {slug:'Dam-Estate'          ,   road: 'thikaroad',  location:           'Dam Estate'                      },
        {slug:'Githurai-45'         ,   road: 'thikaroad',  location:           'Githurai 45'                      },
        {slug:'Kahawa-Sukari'       ,   road: 'thikaroad',  location:           'Kahawa Sukari'                      },
        {slug:'Ongata-Rongai'       ,   road: 'thikaroad',  location:           'Ongata Rongai'                      },
        {slug:'Ruiru'               ,   road: 'thikaroad',  location:           'Ruiru'                      },
        {slug:'Avenue-Estate'       ,   road: 'thikaroad',  location:           'Avenue Estate'                      },
        ],
        optgroups: [
        {id: 'thikaroad', name: 'Thika Rd'},
        {id: 'langatard', name: 'Langata Rd'},
        {id: 'cbd', name: 'CBD & Westlands'},
        {id: 'limururd', name: 'Limuru Rd'}
        ],
        labelField: 'location',
        valueField: 'slug',
        optgroupField: 'road',
        optgroupLabelField: 'name',
        optgroupValueField: 'id',
        optgroupOrder: ['thikaroad','langatard','cbd','limururd'],
        searchField: ['location'],
        plugins: ['optgroup_columns']
    });

  $('#select-location').trigger('input');


  $('.selectized').change(function () { 
      console.log('selected');
      var selectval = $('.selectized').val();
      if (selectval.length > 0 ){
          $('#location-submit').removeClass( "btn-large");        
      }
      else {
          $('#location-submit').addClass( "btn-large");        
      }
  });



  $("#select-industry").selectize({
    options: [
    {slug: 'Fashion'                          , industry : 'Fashion'}, 
    {slug: 'Beauty products'                  , industry : 'Beauty products'}, 
    {slug: 'Fitness'                          , industry : 'Fitness'}, 
    {slug: 'Hairdressers'                     , industry : 'Hairdressers'}, 
    {slug: 'Pharmacies'                       , industry : 'Pharmacies'}, 
    {slug: 'Electronic equipment & Supplies'  , industry : 'Electronic equipment & Supplies'},
    {slug: 'Furniture'                        , industry : 'Furniture'}, 
    {slug: 'Clothing and Accessories'         , industry : 'Clothing and Accessories'}, 
    {slug: 'Camping and Outdoors'             , industry : 'Camping and Outdoors'}, 
    {slug: 'Advertising'                      , industry : 'Advertising'}, 
    {slug: 'Printing'                         , industry : 'Printing'}, 
    {slug: 'Couriers services'                , industry : 'Couriers services'}, 
    {slug: 'Computer services'                , industry : 'Computer services'}, 
    {slug: 'Internet service providers'       , industry : 'Internet service providers'}, 
    {slug: 'Arts and Crafts'                  , industry : 'Arts and Crafts'}, 
    {slug: 'Event services'                   , industry : 'Event services'}, 
    {slug: 'Food retailers'                   , industry : 'Food retailers'}, 
    {slug: 'Catering equipment'               , industry : 'Catering equipment'}, 
    {slug: 'Supermarket'                      , industry : 'Supermarket'}, 
    {slug: 'Take aways'                       , industry : 'Take aways'}, 
    {slug: 'Drive Inns'                       , industry : 'Drive Inns'}, 
    {slug: 'Gifts'                            , industry : 'Gifts'}, 
    {slug: 'Books'                            , industry : 'Books'}, 
    {slug: 'Music'                            , industry : 'Music'}, 
    {slug: 'Restaurants'                      , industry : 'Restaurants'}, 
    {slug: 'Hotels'                           , industry : 'Hotels'}, 
    {slug: 'Apartments'                       , industry : 'Apartments'}, 
    {slug: 'Cab Services/Taxis'               , industry : 'Cab Services/Taxis'}, 
    {slug: 'Logistics'                        , industry : 'Logistics'}, 
    {slug: 'Car parts and Accessories'        , industry : 'Car parts and Accessories'}, 
    {slug: 'Petrol station'                   , industry : 'Petrol station'}, 
    {slug: 'Car rental'                       , industry : 'Car rental'}, 
    {slug: 'Travel Agents'                    , industry : 'Travel Agents'}, 
    {slug: 'Cleaning Services'                , industry : 'Cleaning Services'}, 

    ],
    optgroups: [
    {id: 'thikaroad', name: 'Beauty'},
    {id: 'langatard', name: 'Langata Rd'},
    {id: 'cbd', name: 'CBD & Westlands'},
    {id: 'limururd', name: 'Limuru Rd'}
    ],
    labelField: 'industry',
    valueField: 'slug',
        // optgroupField: 'road',
        // optgroupLabelField: 'name',
        // optgroupValueField: 'id',
        // optgroupOrder: ['thikaroad','langatard','cbd','limururd'],
        // searchField: ['industry']
        // plugins: ['optgroup_columns']
    });

  $('#select-industry').trigger('input');


  $('.selectized').change(function () { 
      console.log('selected');
      var selectval = $('.selectized').val();
      if (selectval.length > 0 ){
          $('#industry-submit').removeClass( "btn-large");        
      }
      else {
          $('#industry-submit').addClass( "btn-large");        
      }
  });



  var xhr;
// var REGEX_msisdn = '([a-z0-9!#$%&\'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&\'*+/=?^_`{|}~-]+)*@' +
'(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)';
var REGEX_msisdn = '(07)[0-9]{8}';

$('#phone').selectize({
    persist: false,
    maxItems: 1,
    valueField: 'msisdn',
    labelField: 'name',
    // searchField: ['name', 'msisdn'],
    searchField: ['msisdn','name'],
    options: customers,

    load: function(query, callback) {
      if (!query.length) return callback();

      xhr && xhr.abort();
      xhr = $.ajax({
        url: '../../dashboard/merchantcustomers',
        type: 'GET',
        dataType: 'JSON',
        //data: 'query=' + query,
        success: function(data) {
          callback(data.slice(0, 150));
        },
        error: function() {
          callback();
        }
      });
    },
    render: {
        item: function(item, escape) {
            return '<div>' +
            (item.name ? '<span class="name">' + escape(item.name) + '</span>' : '') +
            (item.msisdn ? ' ( <span class="msisdn"> ' + escape(item.msisdn) + ' </span> )' : '') +
            '</div>';
        },
        option: function(item, escape) {
//            $('.selectize-input input').attr('type','number');

            var label = item.name || ' ( ' +item.msisdn  +' )';
            var caption = item.name ? ' ( ' +item.msisdn  +' )' : null;
            return '<div>' +
            '<span class="label">' + escape(label) + '</span>' +
            (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
            '</div>';
        }
    },
    option: function(item, escape) {
        $('.selectize-input input').attr('type','number');

        var label = item.name || ' ( ' +item.msisdn  +' )';
        var caption = item.name ? ' ( ' +item.msisdn  +' )' : null;
        return '<div>' +
        '<span class="label">' + escape(label) + '</span>' +
        (caption ? '<span class="caption">' + escape(caption) + '</span>' : '') +
        '</div>';
    },
createFilter: function(input) {

    var match, regex;

        // msisdn@address.com
        regex = new RegExp('^' + REGEX_msisdn + '$', 'i');
        match = input.match(regex);
        if (match) return !this.options.hasOwnProperty(match[0]);

        // name <msisdn@address.com>
        regex = new RegExp('^([^<]*)\<' + REGEX_msisdn + '\>$', 'i');
        match = input.match(regex);
        if (match) return !this.options.hasOwnProperty(match[2]);

        return false;
    },
    create: function(input) {
        if ((new RegExp('^' + REGEX_msisdn + '$', 'i')).test(input)) {
            return {msisdn: input};
        }
        var match = input.match(new RegExp('^([^<]*)\<' + REGEX_msisdn + '\>$', 'i'));
        if (match) {
            return {
                msisdn : match[2],
                name  : $.trim(match[1])
            };
        }
        alert('Invalid phone number.');
        return false;
    }
});



});

