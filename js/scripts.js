jQuery(document).ready(function($) {
        $("a.word-export").click(function(event) {
            $("#page-content").wordExport();
        });
    });