Editor = {
    inicioaliza_editor_tinymce: function (campo_texto) {
        tinymce.init({
            selector: campo_texto,
            theme: "modern",
//                        width: 800,
//                        height: 300,
            document_base_url: "",
            relative_urls: false,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
            ],
            toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
            style_formats: [
                {title: 'Bold text', inline: 'b'},
                {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                {title: 'Example 1', inline: 'span', classes: 'example1'},
                {title: 'Example 2', inline: 'span', classes: 'example2'},
                {title: 'Table styles', selector: 'table', classes: 'table table-bordered'},
                {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
            ],
            toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
            image_advtab: true,
            external_filemanager_path: Config.base_url("/noticia/filemanager/"),
            filemanager_title: "Responsive Filemanager",
            external_plugins: {"filemanager": Config.base_url("/noticia/filemanager/plugin.min.js")}

        });
    }
}