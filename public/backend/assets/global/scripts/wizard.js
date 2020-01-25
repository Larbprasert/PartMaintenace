var WizardDemo = function() {
//== Base elements
var wizardEl = $( '#m_wizard' );
var formEl = $( '#m_form' );
var validator;
var wizard;
//== Private functions
var initWizard = function() {
//== Initialize form wizard
wizard = new mWizard('m_wizard', {
startStep: 1
});
wizard.on( 'beforeNext', function( wizard ) {
if ( validator.form() !== true ) {
return false;
}
if ( wizard.getStep() === 1 ) {
//step one
}
if ( wizard.getStep() === 2 ) {
//step 2
}
} )
wizard.on( 'change', function( wizard ) {
mApp.scrollTop();
} );
}
var initValidation = function() {
validator = formEl.validate( {
ignore: ":hidden",
rules: {
skidmore_id: {
required: true
},
selection_1: {
required: true
},
selection_2: {
required: true
},
selection_3: {
required: true
},
selection_4: {
required: true
},
selection_5: {
required: true
},
selection_6: {
required: true
},
selection_7: {
required: true
},
selection_8: {
required: true
},
selection_9: {
required: true
},
selection_10: {
required: true
},
accept: {
required: true
}
},
//== Validation messages
messages: {
'account_communication[]': {
required: 'You must select at least one communication option'
},
accept: {
required: "Please check this box to show you have reviewed your choices above."
}
},
//== Display error
invalidHandler: function( event, validator ) {
mApp.scrollTop();
swal( {
"title": "",
"text": "There are some errors in your submission. Please correct them.",
"type": "error",
"confirmButtonClass": "btn btn-secondary m-btn m-btn–wide"
} );
},
//== Submit valid form
submitHandler: function( form ) {}
} );
}
var initSubmit = function() {
var btn = formEl.find( '[data-wizard-action="submit"]' );
btn.on( 'click', function( e ) {
e.preventDefault();
if ( validator.form() ) {
mApp.progress( btn );
formEl.ajaxSubmit( {
success: function() {
mApp.unprogress( btn );
//submit function goes here
}
} );
}
} );
}
return {
// public functions
init: function() {
wizardEl = $( '#m_wizard' );
formEl = $( '#m_form' );
initWizard();
initValidation();
initSubmit();
}
};
}();
WizardDemo.init();