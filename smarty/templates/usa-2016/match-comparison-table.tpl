{literal}
<script id="comparison-template" type="text/x-handlebars-template">
    <table class="table table-striped comparison-table">
        <thead>
            <tr>
                <th>{/literal}{$text['result_question']}{literal}
                <th class="comp-center">{{header.one}}
                <th>
                <th class="comp-center">{{header.two}}
            </tr>
        </thead>
        <tbody>
            {{#each rows}}
                <tr>
                    <td><i class='{{important}}'></i> {{name}} <span data-toggle='tooltip' data-placement='top' title='{{text}}' class='tooltip-right'> <i class='fa fa-info-circle'></i> </span>
                    <td class='comp-center'>{{word.one}}
                        {{#if detail.one}}
                            <span data-toggle='tooltip' data-placement='top' title='{{detail.one}}' class='tooltip-left'> <i class='fa fa-info-circle'></i> </span>
                        {{/if}}
                    <td class='comp-center'><strong>{{comparison}}</strong>
                    <td class='comp-center'>{{word.two}}
                        {{#if detail.two}}
                            <span data-toggle='tooltip' data-placement='top' title='{{detail.two}}' class='tooltip-left'> <i class='fa fa-info-circle'></i> </span>
                        {{/if}}
                </tr>    
            {{/each}}
        </tbody>
    </table>
</script>

<script>
/*$(function () {
    theTemplateScript = $("#comparison-template").html();
    theTemplate = Handlebars.compile(theTemplateScript);
   var context={
        "header": {
            "one": "One",
            "two": "Two"
        },
        "rows": [
            {
                "name": "R1",
                "important": "fa fa-star",
                "text": "RRR1",
                "word": {
                    "one": "W1",
                    "two": "W2"
                }
            }
        ]
    };
    
    var theCompiledHtml = theTemplate(context);

    $('#content-placeholder').html(theCompiledHtml);
});*/
</script>

{/literal}

<div id="content-placeholder"></div>

