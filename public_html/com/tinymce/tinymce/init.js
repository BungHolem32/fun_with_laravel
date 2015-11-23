tinymce.init({
    selector: "textarea.editor",
    theme: "modern",
    height: 300,
    /*plugins: [
     "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
     "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
     "save table contextmenu directionality emoticons template paste textcolor"
     ],*/

    forced_root_block : "",
    /*forced_root_block : false,
    force_p_newlines : false,
    remove_linebreaks : false,
    force_br_newlines : true,
    remove_trailing_nbsp : false,
    verify_html : false,*/

    plugins: [
        "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
        "table contextmenu directionality template textcolor responsivefilemanager paste textcolor colorpicker textpattern imagetools"
    ],


    //toolbar1: "newdocument fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
    //toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
    //toolbar3: "table | hr removeformat | subscript superscript | charmap emoticons | print fullscreen | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak restoredraft",

    toolbar1: "fullscreen code visualblocks | insertfile undo redo | styleselect removeformat blockquote hr | link unlink anchor image media responsivefilemanager charmap | bullist numlist | forecolor backcolor | preview print spellchecker",
    tollbar2: "bold italic | alignleft aligncenter alignright alignjustify",

    menubar: false,
    image_advtab: true,

    relative_urls: false,

    external_filemanager_path:"/com/tinymce/filemanager/",
    filemanager_title:"Responsive Filemanager" ,
    external_plugins: { "filemanager" : "/com/tinymce/filemanager/plugin.min.js"},


    //toolbar_items_size: 'small',
    //content_css: "css/content.css",

    style_formats: [
        {title: 'Header 2', inline: 'h2'},
        //{title: 'Quate', inline: 'h2'},
        {title: 'Bold text', inline: 'b'},
        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
        {title: 'Example 1', inline: 'span', classes: 'example1'},
        {title: 'Example 2', inline: 'span', classes: 'example2'},
        {title: 'Table styles'},
        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
});