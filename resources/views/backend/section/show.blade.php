@extends('backend.layouts.app')

@section('title', 'หน้าแรก')

@section('content')

<style type="text/css">

.m-datatable__row>.m-datatable__cell{
    background: #f4f3f8;
}

#example_length {
    margin-top: 10px;
}

.dataTables_wrapper>.dataTables_filter>input {
    margin-left: 0px !important;
    margin-bottom: 10px;
}

.editButton {
    margin-right: 20px;
}

.form-control-danger {
    color: #f4516c;
    border-color: #f4516c !important;
}

</style>

<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <!-- <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Price Comparison
                </h3>
            </div>
        </div>
    </div> -->
    <!-- END: Subheader -->
    <div class="m-content">

        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Inventory - {{{$inventory->invPlace}}} <small>initialized from javascript array</small>
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <button type="button" class="btn btn-outline-success" data-target="#m_modal_1_2" data-toggle="modal" id="newUser"> Create new Material </button>
                    <!-- <ul class="m-portlet__nav">
                        <li class="m-portlet__nav-item">
                            <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                    <i class="la la-ellipsis-h m--font-brand"></i>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav">
                                                    <li class="m-nav__section m-nav__section--first">
                                                        <span class="m-nav__section-text">Quick Actions</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">Create Post</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">Send Messages</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                            <span class="m-nav__link-text">Upload File</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__section">
                                                        <span class="m-nav__section-text">Useful Links</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">FAQ</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">Support</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit m--hide">
                                                    </li>
                                                    <li class="m-nav__item m--hide">
                                                        <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">Submit</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul> -->
                </div>
            </div>
            <div class="m-portlet__body">
                <!--begin: Search Form -->
                <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded">

                    <table id="example" class="m-datatable__table stripe hover" style="width: 100%">
                        <thead class="m-datatable__head">
                            <tr class="m-datatable__row">
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matID</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matTitle</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matCategory</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matUnit</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matAmount</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matPrice</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">matUpdateDate</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">action</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
            <div class="m-portlet__foot">
                <div class="m-form__actions">
                    <div class="row">
                        <div class="col-lg-4 m--align-left">
                            <a href={{ route('inventory.index') }} class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
                                <span>
                                    <i class="la la-arrow-left"></i>
                                    &nbsp;&nbsp;
                                    <span>
                                        Back
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Begin::Modal Create new Request-->
        <div class="modal fade" id="m_modal_1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('backend.inventory.createMat')
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Modal -->
        
        <!-- Begin::Modal Edit data -->
        <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('backend.inventory.editMat')
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Modal -->

        <!-- Begin::Modal Delete data -->
        <div class="modal fade" id="modaldelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('backend.inventory.delete')
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Modal -->



        <!--Begin::Main Portlet-->
        <!--End::Main Portlet-->
        <!--Begin::Main Portlet-->
        <!--End::Main Portlet-->
        <!--Begin::Main Portlet-->
        <!--End::Main Portlet-->
        <!--Begin::Main Portlet-->
        <!--End::Main Portlet-->
        <!--Begin::Main Portlet-->
        <!--End::Main Portlet-->
        <script src="{{ url('backend/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>

    </div>
</div>

@endsection


@section('javascript')
    <link href="{{ url('backend/assets/global/css/dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('backend/assets/global/scripts/dataTables.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            var id = {{ $inventory->invID }}
            console.log('inventory : ' + id);

            var changePass=0;
            var table = $('#example').DataTable( {
                "ajax": id + "/datatable",
                "columns": [
                    { "data": "matID" , "className" : "m-datatable__cell" },
                    { "data": "matTitle" },
                    { "data": "matCategory" },
                    { "data": "matUnit" },
                    { "data": "matAmount"},
                    { "data": "matPrice" },
                    { "data": "matUpdateDate" },
                    { "data": "action" }
                ],
                "rowCallback": function ( row, data, displayIndex ) {
                    // switch(data.position) {
                    //  case "admin":
                    //      $('td', row).eq(4).html('<span class="m-badge m-badge--brand m-badge--wide">Admin</span>');
                    //      break;
                    //  case "member":
                    //      $('td', row).eq(4).html('<span class="m-badge m-badge--success m-badge--wide">Member</span>');
                    //      break;
                    // }
                    $('td', row).eq(6).css('text-align', 'center');
                    $( "th:eq( 6 )" ).css( "text-align", "center" );
                },
            } );

            $( "#example_filter" ).prepend( $("#example_filter>label>input") );
            $( "#example_filter>input" ).addClass("form-control m-input m-input--solid");
            $( "#example_filter>input" ).attr("placeholder", "Search ...");
            $( "#example_filter>label" ).remove();

            $( "#createSubmit" ).click(function() {

                var arrayCheck = [];
                var method = 'create';

                /* Validation input */
                arrayCheck = validateInput(arrayCheck, method);

                console.log('arrayCheck : ' + JSON.stringify(arrayCheck));

                /* Trigger inventory place */
                if ( arrayCheck['checkimName'] == 1 && arrayCheck['checkimUnit'] == 1 && arrayCheck['checkimPrice'] == 1 && arrayCheck['checkimAmount'] == 1 ) {

                    var data = {
                        'imName'     : $( "#imName" ).val(),
                        'imCategory' : $( "#imCategory" ).val(),
                        'imUnit'     : $( "#imUnit" ).val(),
                        'imPrice'    : $( "#imPrice" ).val(),
                        'imAmount'   : $( "#imAmount" ).val(),
                        'imvendorID' : $( "#imvendorID" ).val(),
                        'invID'      : id,
                        _token: '{{csrf_token()}}'
                    }

                    $.ajax({
                        url: "create",
                        type: 'POST',
                        data: data,
                        dataType: 'json', // added data type
                        success: function(res) {
                            console.log(res);
                            reloadTable(res);
                            changePass=0
                        }
                    });

                    // Hide modal
                    $('#m_modal_1_2').modal('hide');
                } else {
                    console.log(arrayCheck);
                    arrayCheck['checkimName'] = 0;
                    arrayCheck['checkimUnit'] = 0;
                    arrayCheck['checkimPrice'] = 0;
                    arrayCheck['checkimAmount'] = 0;
                }
            });

            $( "#deleteButton" ).click(function(){
                var id = $("#deleteButton").val();
                $.ajax({
                    type: "POST",
                    url: id + "/delete",
                    data: { _token: '{!! csrf_token() !!}' },
                    success: function(data){
                        // console.log(data);
                        $("#modaldelete").modal('hide');
                        reloadTable(1);
                    }
                });
            });

            $( "#updateRecord" ).click(function( event ) {

                var arrayCheck = [];
                var method = 'update';

                /* Validation input */
                arrayCheck = validateInput(arrayCheck, method);

                console.log('arrayCheck : ' + arrayCheck);

                /* Trigger inventory place */
                if ( arrayCheck['checkimName'] == 1 && arrayCheck['checkimUnit'] == 1 && arrayCheck['checkimPrice'] == 1 && arrayCheck['checkimAmount'] == 1 ) {

                    // Get id
                    var idHidden = $('#idHidden').val();
                    console.log('idHidden-test : ' + idHidden);

                    // Bundle data into variable
                    var data = {
                        'matTitle'  : $( "#imNameEdit" ).val(),
                        'catMatID'  : $( "#imCategoryEdit" ).val(),
                        'matUnit'   : $( "#imUnitEdit" ).val(),
                        'matPrice'  : $( "#imPriceEdit" ).val(),
                        'matAmount' : $( "#imAmountEdit" ).val(),
                        'vendorID'  : $( "#imvendorIDEdit" ).val(),
                        'idHidden'  : idHidden,
                        _token: '{{csrf_token()}}'
                    }

                    $.ajax({
                        type: "POST",
                        url:  idHidden + "/update",
                        data: data,
                        success: function(data){
                            $("#modaledit").modal('hide');
                            reloadTable(1);
                            changePass=0
                        }
                    });
                } else {
                    console.log(arrayCheck);
                    arrayCheck['checkimName'] = 0;
                    arrayCheck['checkimUnit'] = 0;
                    arrayCheck['checkimPrice'] = 0;
                    arrayCheck['checkimAmount'] = 0;
                }
            });

            // Trigger after insert data complete wil reload datatable 
            function reloadTable(res) {
                if (res == 1) {
                    table.ajax.reload( null, false );
                } else {
                    alert("Insert not completed")
                }
            }

        });

        function editFunction(id) {
            console.log('id : ' + id);
            $.ajax({
                type: "GET",
                url: id + "/edit",
                success: function(data){
                    console.log(data);
                    $( "#idHidden" ).val(id);
                    $( "#imNameEdit" ).val(data.matTitle);
                    $( "#imCategoryEdit" ).val(data.catMatID);
                    $( "#imUnitEdit" ).val(data.matUnit);
                    $( "#imPriceEdit" ).val(data.matPrice);
                    $( "#imAmountEdit" ).val(data.matAmount);
                    $( "#imvendorIDEdit" ).val(data.vendorID);
                }
            });
        }

        function deleteFunction(id, row) {
            
            $('#example > tbody  > tr').each(function(index , value) {
                    if(index==row){
                        // console.log($("#example > tbody  > tr:eq("+index+")").find("td:eq(1)").text())
                        var nameDel = $("#example > tbody  > tr:eq("+index+")").find("td:eq(1)").text();
                        $( "#nameDelete" ).text(nameDel);
                    }
            });

            $( "#deleteButton" ).val(id);
        }

        function validateInput(arrayCheck, method) {

            arrayCheck = { checkimName:0, checkimUnit:0, checkimPrice:0, checkimAmount:0 };

            console.log('arrayCheck-validate : ' + JSON.stringify(arrayCheck));

            if (method == 'create')
            {
                if ( !isEmpty($("#imName").val()) ) {
                    arrayCheck['checkimName'] = 1;
                    $( "#imName" ).removeClass("form-control-danger");
                } else {
                    console.log('imName : here');
                    $( "#imName" ).addClass("form-control-danger");
                }

                if ( !isEmpty($("#imUnit").val()) ) {
                    arrayCheck['checkimUnit'] = 1;
                    $( "#imUnit" ).removeClass("form-control-danger");
                } else {
                    console.log('imUnit : here');
                    $( "#imUnit" ).addClass("form-control-danger");
                }

                if ( !isEmpty($("#imPrice").val()) ) {
                    arrayCheck['checkimPrice'] = 1;
                    $( "#imPrice" ).removeClass("form-control-danger");
                } else {
                    console.log('imPrice : here');
                    $( "#imPrice" ).addClass("form-control-danger");
                }
                
                if ( !isEmpty($("#imAmount").val()) ) {
                    arrayCheck['checkimAmount'] = 1;
                    $( "#imAmount" ).removeClass("form-control-danger");
                } else {
                    console.log('imAmount : here');
                    $( "#imAmount" ).addClass("form-control-danger");
                }
            } 
            else if (method == 'update')
            {
                if ( !isEmpty($("#imNameEdit").val()) ) {
                    arrayCheck['checkimName'] = 1;
                    $( "#imNameEdit" ).removeClass("form-control-danger");
                } else {
                    $( "#imNameEdit" ).addClass("form-control-danger");
                }

                if ( !isEmpty($("#imUnitEdit").val()) ) {
                    arrayCheck['checkimUnit'] = 1;
                    $( "#imUnitEdit" ).removeClass("form-control-danger");
                } else {
                    $( "#imUnitEdit" ).addClass("form-control-danger");
                }

                if ( !isEmpty($("#imPriceEdit").val()) && !isNaN($("#imPriceEdit").val())  ) {
                    arrayCheck['checkimPrice'] = 1;
                    $( "#imPriceEdit" ).removeClass("form-control-danger");
                } else {
                    $( "#imPriceEdit" ).addClass("form-control-danger");
                }
                
                if ( !isEmpty($("#imAmountEdit").val()) && !isNaN($("#imAmountEdit").val()) ) {
                    arrayCheck['checkimAmount'] = 1;
                    $( "#imAmountEdit" ).removeClass("form-control-danger");
                } else {
                    $( "#imAmountEdit" ).addClass("form-control-danger");
                }
            }

            return arrayCheck;
        }

        function isEmpty(value) {
            return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
        }

    </script>

@endsection



