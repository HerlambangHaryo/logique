{!!color_admin_apple_v42_open_form_with_id($id)!!}
@csrf

<div class="panel panel-inverse">
    <div class="panel-heading">
        @include($template.'.'.$controller.'.panel_heading')
    </div>
    <div class="panel-body">
        <div id="form">
        </div>
    </div>
</div>

{!!color_admin_apple_v42_submit('submit',$id,'submit','SUBMIT',$dmha_271)!!}

{!!UI_FORM_close_form()!!}