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
                <tr class="{{compare_class}}">
                    <td><span class="clickable" data-toggle="popover" title="{{name}}" data-content="{{text}}" data-placement="top">
                        <i class='{{important}}'></i> {{name}} <span data-toggle='tooltip' data-placement='top' title='{{text}}' class='tooltip-right'> <i class='fa fa-info-circle'></i> </span>
                    </span>
                    <td class='comp-center'>{{word.one}}
                        {{#if detail.one}}
                            <span class="clickable" data-toggle="popover" data-content="{{detail.one}}" data-placement="left">
                                <span data-toggle='tooltip' data-placement='top' title='{{detail.one}}' class='tooltip-left'> <i class='fa fa-info-circle'></i> </span>
                            </span>
                        {{/if}}
                    <td class='comp-center'><strong>{{comparison}}</strong>
                    <td class='comp-center'>
                        {{#if detail.two}}
                            <span class="clickable" data-toggle="popover" title="" data-content="{{detail.two}}" data-placement="left">
                                {{word.two}}
                                <span data-toggle='tooltip' data-placement='top' title='{{detail.two}}' class='tooltip-left'> <i class='fa fa-info-circle'></i> </span>
                            </span>
                        {{else}}
                            {{word.two}}
                        {{/if}}
                </tr>
            {{/each}}
        </tbody>
    </table>
</script>

{/literal}

<div id="content-placeholder"></div>
