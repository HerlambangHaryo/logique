<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/parsley/dist/parsley.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
<script src="{{ asset('/public/').'/'.$root }}/assets/js/demo/form-wizards-validation.demo.min.js"></script>

<script>    
{!!ajax_header_csrf()!!}

$(document).ready(function(){
    App.init();
	FormWizardValidation.init();
    
    $('#MyModals').modal('show');
});
</script>