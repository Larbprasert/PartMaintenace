@extends('backend.layouts.app')

@section('title', 'Section')

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
                    Inventory Management
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
                            Section	 Management<small>showing summary from data</small>
                        </h3>
                    </div>
                </div>
                <div class="m-portlet__head-tools">
                    <button type="button" class="btn btn-outline-success" data-target="#m_modal_1_2" data-toggle="modal" id="newInventory"> New Section</button>
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
                <div class="m_datatable m-datatable m-datatable--default m-datatable--loaded">

                    <table id="example" class="m-datatable__table stripe hover" style="width: 100%">
                        <thead class="m-datatable__head">
                            <tr class="m-datatable__row">
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">sectionID</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">sectionEn</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">sectionTh</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">deptId</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">activeFlag</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">createDate</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">createBy</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">updateDate</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">updateBy</th>
                                <th class="m-datatable__cell--center m-datatable__cell m-datatable__cell--check">action</th>
                            </tr>
                        </thead>
                    </table>

                </div>
            </div>
        </div>

        
        <!-- Begin::Modal Create new inventory-->
        <div class="modal fade" id="m_modal_1_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        @include('backend.section.create')
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
                        @include('backend.section.edit')
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
                        @include('backend.section.delete')
                    </div>
                </div>
            </div>
        </div>
        <!-- End::Modal -->
    </div>
</div>

@endsection



@section('javascript')

    <link href="{{ url('backend/assets/global/css/dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ url('backend/assets/global/scripts/dataTables.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function() {

            var table = $('#example').DataTable( {
                "ajax": "section/datatable",
                "columns": [
                    { "data": "sectionID" , "className" : "m-datatable__cell" },
                    { "data": "sectionEn" },
                    { "data": "sectionTh" },
                    { "data": "deptId" },
                    { "data": "activeFlag"},
                    { "data": "createDate" },
                    { "data": "createBy" },
                    { "data": "updateDate" },
                    { "data": "updateBy"},
                    { "data": "action"},
                ]
            });

            $( "#example_filter" ).prepend( $("#example_filter>label>input") );
            $( "#example_filter>input" ).addClass("form-control m-input m-input--solid");
            $( "#example_filter>input" ).attr("placeholder", "Search ...");
            $( "#example_filter>label" ).remove();

            // Trigger after insert data complete wil reload datatable 
            function reloadTable(res) {
                if (res == 1) {
                    table.ajax.reload( null, false );
                } else {
                    alert("Insert not completed");
                }
            }

        });

        $( "#createSubmit" ).click(function() {

            var arrayCheck = [];
            var method = 'create';

            /* Validation input */
            arrayCheck = validateInput(arrayCheck, method);

            /* Trigger bom name */
            // if ( arrayCheck['checksectionPlace'] == 1 && arrayCheck['checksectionAddress'] == 1 ) {

                var data = {
                    'sectionEn' : $('#sectionEn').val(),
					'sectionTh' : $('#sectionTh').val(),
					'deptId'    : $('#deptId').val(),
                    _token: '{{csrf_token()}}'
                }

                $.ajax({
                    url: "section/create",
                    type: 'POST',
                    data: data,
                    dataType: 'json', // added data type
                    success: function(res) {
                        console.log(res);
                        reloadTable(res);
                    }
                });

                // Hide modal
                $('#m_modal_1_2').modal('hide');
            // } else {
            //     arrayCheck['checksectionPlace'] = 0;
            //     arrayCheck['checksectionAddress'] = 0;
            // }
        });

        $( "#deleteButton" ).click(function(){
            var id = $("#deleteButton").val();
            $.ajax({
                type: "POST",
                url: "section/delete/" + id,
                data: { _token: '{!! csrf_token() !!}' },
                success: function(data){
                    // console.log(data);
                    $("#modaldelete").modal('hide');
                    reloadTable(1);
                }
            });
        });


        function editFunction(id) {
            console.log('id : ' + id);
            $.ajax({
                type: "GET",
                url: "section/edit/" + id,
                success: function(data){
                    console.log(data);
                    console.log(data.sectionEn);
                    $( "#idHidden" ).val(id);
                    $( "#sectionEnEdit" ).val(data.sectionEn);
                    $( "#sectionThEdit" ).val(data.sectionTh);
                    $( "#deptIdEdit" ).val(data.deptId);
                }
            });
        }

        function deleteFunction(id, row) {
            
            $('#example > tbody  > tr').each(function(index , value) {
                    if(index==row){
                        var nameDel = $("#example > tbody  > tr:eq("+index+")").find("td:eq(1)").text();
                        $( "#nameDelete" ).text(nameDel);
                    }
            });

            $( "#deleteButton" ).val(id);
        }

        // function validateInput(arrayCheck, method) {

        //     arrayCheck = {checkinvPlace:0, checkinvAddress:0};

        //     console.log('arrayCheck : ' + arrayCheck);

        //     if (method == 'create')
        //     {
        //         if ( !isEmpty($("#invPlace").val()) ) {
        //             arrayCheck['checkinvPlace'] = 1;
        //             $( "#invPlace" ).removeClass("form-control-danger");
        //         } else {
        //             $( "#invPlace" ).addClass("form-control-danger");
        //         }

        //         if ( !isEmpty($("#invAddress").val()) ) {
        //             arrayCheck['checkinvAddress'] = 1;
        //             $( "#invAddress" ).removeClass("form-control-danger");
        //         } else {
        //             $( "#invAddress" ).addClass("form-control-danger");
        //         }
        //     } 
        //     else if (method == 'update')
        //     {
        //         if ( !isEmpty($("#invPlaceEdit").val()) ) {
        //             arrayCheck['checkinvPlace'] = 1;
        //             $( "#invPlaceEdit" ).removeClass("form-control-danger");
        //         } else {
        //             $( "#invPlaceEdit" ).addClass("form-control-danger");
        //         }

        //         if ( !isEmpty($("#invAddressEdit").val()) ) {
        //             arrayCheck['checkinvAddress'] = 1;
        //             $( "#invAddressEdit" ).removeClass("form-control-danger");
        //         } else {
        //             $( "#invAddressEdit" ).addClass("form-control-danger");
        //         }
        //     }

        //     return arrayCheck;
        // }

        // function isEmpty(value) {
        //     return typeof value == 'string' && !value.trim() || typeof value == 'undefined' || value === null;
        // }


    </script>

@endsection

