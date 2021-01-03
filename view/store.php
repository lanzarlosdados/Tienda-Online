{{> header}}


<div class="container">

    <div class="row">
        {{#productos}}
        <div class="col-sm-4">
            <div class="panel panel-primary">
                <div class="panel-heading">{{nombre}}</div>
                <div class="panel-body"><img src='../../public/img/{{imagen}}' class="img-responsive" style="width:100%" alt="Image"></div>
                <div class="panel-footer">{{precio}}</div>
            </div>
        </div>
        {{/productos}}
    </div>

</div><br><br>

{{> footer}}