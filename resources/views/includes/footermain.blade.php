 <!-- content-footer -->
 <footer class="content-footer">
     <div>© 2021 Designed by - <a href="https://ssssybertech.com/" target="_blank">SSS Sybertech Pvt. Ltd.</a></div>
     <div>
         <nav class="nav gap-4">
             <a href="#" class="nav-link">Home</a>
             
             <a href="#" class="nav-link">Get Help</a>
         </nav>
     </div>
 </footer>
 <!-- ./ content-footer -->

 </div>
 <!-- ./ layout-wrapper -->

 <!-- Bundle scripts -->
 <script src="{{ asset('public/libsmain/bundle.js') }}"></script>

 <!-- quill editor -->
 <!-- <script src=" {{ asset('public/libsmain/quill/quill.js') }} "></script> -->

 <!-- Range slider -->
 <script src="{{ asset('public/libsmain/range-slider/js/ion.rangeSlider.min.js') }}"></script>

 <!-- Form wiard scripts -->
 <script src="{{ asset('public/libsmain/form-wizard/jquery.steps.min.js') }}"></script>

 <!-- Select 2 Js -->
 <script src="{{ asset('public/libsmain/select2/js/select2.min.js') }}"></script>

 <!-- Examples -->
 <script src="{{ asset('public/jsmain/examples/products.js') }}"></script>

 <!-- Main Javascript file -->
 <script src="{{ asset('public/jsmain/app.min.js') }} "></script>



 <!-- Modal Popup file -->
 <!-- <script src="{{ asset('public/jsmain/examples/modal.js') }} "></script> -->

 <!-- Text Editor -->
 <script src="{{ asset('public/libsmain/ckeditor5/ckeditor.js') }} "></script>

 <!-- Datatable -->
 <script src="{{ asset('public/libsmain/datatable/datatables.min.js') }} "></script>

 <script src="https://cdn.jsdelivr.net/npm/spectrum-colorpicker2/dist/spectrum.min.js"></script>

 <!-- Custom Javascript file -->
 <script src="{{ asset('public/jsmain/style.js') }} "></script>


 <script type="text/javascript">
$(document).ready(function(){
    $(".checkprodstatus").change(function(){    
             var style=$(this).children(":selected").attr("style");  
             $(this).attr("style", style); 
    });
});
</script>
 <script>
     //  On Store weblink
     $(document).ready(function () {
         $('.userweblnkresetbtn').click(function () {
             $('#userstoreweblink').val('')
             $('#userstoreweblink').focus();
         });
     });
 </script>

 <!-- Discount select all -->
 <script>
     // FOR DISCOUNT MODAL  
     $(document).ready(function () {
         $('.targetproducts').click(function () {
             $('.allproductssection').slideToggle('slow');
         });
     });
     $(document).ready(function () {
         $("#alldiscountcategory1").click(function () {
             $(".discountcategory1").prop('checked', $(this).prop('checked'));
         });

         $(".discountcategory1").change(function () {
             if (!$(this).prop("checked")) {
                 $("#alldiscountcategory1").prop("checked", false);
             }
         });

         // FOR WOMENS CATEGORY
         $("#alldiscountcategory2").click(function () {
             $(".discountcategory2").prop('checked', $(this).prop('checked'));
         });

         $(".discountcategory2").change(function () {
             if (!$(this).prop("checked")) {
                 $("#alldiscountcategory2").prop("checked", false);
             }
         });
     });
 </script>


 <script>
     //   Initialize Quill editor 

     //  var editor = new Quill('#editor', {
     //      modules: {
     //          toolbar: '#toolbar'
     //      },
     //      theme: 'snow'
     //  });

     //  FOR SHIPPING RATES
     $(document).ready(function () {
         $("input[type='radio']").change(function () {
             if ($(this).val() == "chargeperitem") {
                 $(".shippingchargesdiv").show();
                 $("#chargeperorderdiv").hide();
                 $("#chargeperitemdiv").show();
             } else if ($(this).val() == "chargeperorder") {
                 $(".shippingchargesdiv").show();
                 $("#chargeperitemdiv").hide();
                 $("#chargeperorderdiv").show();

             } else {
                 $(".shippingchargesdiv").hide();
             }
         });
     });

     //  FOR GST 

     $(document).ready(function () {
         $("input[type='radio']").change(function () {
             if ($(this).val() == "nogst") {
                 $("#gstdiv").hide();
             } else if ($(this).val() == "havegst") {
                 $("#gstdiv").show();
             } else {
                 $("#gstdiv").hide();
             }
         });
     });




     //  FOR BANNER ADD PART

     $('#bannername').change(function () {
         switch (this.value) {
             case "topbanner":
                 $('#banner_image').attr('accept', 'image/png, image/gif, image/jpeg').val('');
                 $('.discountslabdiv').hide();
                 $('.targetproductdiv').show();

                 break;
             case "discountbanner":
                 $('#banner_image').attr('accept', 'image/png, image/gif, image/jpeg');
                 $('.discountslabdiv').show();
                 $('.targetproductdiv').hide();
                 break;
             case "videobanner":
                 $('#banner_image').attr('accept', 'video/mp4');
                 $('.discountslabdiv').hide();
                 $('.targetproductdiv').show();
                 break;
         }
     });

     //  FOR BANNER EDIT PART

     $('#editbannername').change(function () {
         switch (this.value) {
             case "topbanner":
                 $('#editbanner_image').attr('accept', 'image/png, image/gif, image/jpeg').val('');
                 $('.editdiscountslabdiv').hide();
                 $('.edittargetproductdiv').show();

                 break;
             case "discountbanner":
                 $('#editbanner_image').attr('accept', 'image/png, image/gif, image/jpeg');
                 $('.editdiscountslabdiv').show();
                 $('.edittargetproductdiv').hide();
                 break;
             case "videobanner":
                 $('#editbanner_image').attr('accept', 'video/mp4');
                 $('.editdiscountslabdiv').hide();
                 $('.edittargetproductdiv').show();
                 break;
         }
     });

     //  For product discount slab
     $(document).ready(function () {
         var FRUIT_GROUPS = [{
                 id: '',
                 text: 'Citrus',
                 children: [{
                         id: 'c1',
                         text: 'Grapefruit'
                     },
                     {
                         id: 'c2',
                         text: 'Orange'
                     },
                     {
                         id: 'c3',
                         text: 'Lemon'
                     },
                     {
                         id: 'c4',
                         text: 'Lime'
                     }
                 ]
             },
             {
                 id: '',
                 text: 'Other',
                 children: [{
                         id: 'o1',
                         text: 'Apple'
                     },
                     {
                         id: 'o2',
                         text: 'Mango'
                     },
                     {
                         id: 'o3',
                         text: 'Banana'
                     }
                 ]
             }
         ];
         let discountslab = {
             data: FRUIT_GROUPS,
             //  closeOnSelect: true,
             width: '100%',
             placeholder: "Discount Slab",
             //  allowHtml: true,
             //  allowClear: true
         };
         $("#discountslab").select2(discountslab);
     });
 </script>


 <script>
     //  For Banner Datatable
     $('#bannerdatatable').DataTable({
         "responsive": false,
         "pageLength": 5,
         "lengthMenu": [
             [5, 10, 20, -1],
             [5, 10, 20, 'Todos']
         ],
         "language": {
             "info": "Showing _START_ to _END_ of _TOTAL_ banners.",
             "infoEmpty": "Showing _TOTAL_ banners.",
             "sLengthMenu": "Show _MENU_ banners"
         },
         "oLanguage": {
             "sEmptyTable": "No banners available in table."
         },
         "oPaginate": {
             "sPrevious": "<< previous",
             "sNext": "Next >>",
             "sFirst": "<<",
             "sLast": ">>"
         }
     });

     //  For Category Datatable
     $('#categorydatatable').DataTable({
         "responsive": false,
         "pageLength": 5,
         "lengthMenu": [
             [5, 10, 20, -1],
             [5, 10, 20, 'Todos']
         ],
         "language": {
             "info": "Showing _START_ to _END_ of _TOTAL_ categories.",
             "infoEmpty": "Showing _TOTAL_ categories.",
             "sLengthMenu": "Show _MENU_ categories",
             "zeroRecords": "No matching categories found."
         },
         "oLanguage": {
             "sEmptyTable": "No categories available in table.",
             "sSearch": "Quick Search:"
         },
         "oPaginate": {
             "sPrevious": "<< previous",
             "sNext": "Next >>",
             "sFirst": "<<",
             "sLast": ">>"
         }
     });

     //  For Attribute Datatable
     $('#attributedatatable').DataTable({
         "responsive": false,
         "pageLength": 5,
         "lengthMenu": [
             [5, 10, 20, -1],
             [5, 10, 20, 'Todos']
         ],
         "language": {
             "info": "Showing _START_ to _END_ of _TOTAL_ attributes.",
             "infoEmpty": "Showing _TOTAL_ attributes.",
             "sLengthMenu": "Show _MENU_ attributes"
         },
         "oLanguage": {
             "sEmptyTable": "No attributes available in table."
         },
         "oPaginate": {
             "sPrevious": "<< previous",
             "sNext": "Next >>",
             "sFirst": "<<",
             "sLast": ">>"
         }
     });

     //  For Brand Datatable
     $('#branddatatable').DataTable({
         "responsive": false,
         "pageLength": 5,
         "lengthMenu": [
             [5, 10, 20, -1],
             [5, 10, 20, 'Todos']
         ],
         "language": {
             "info": "Showing _START_ to _END_ of _TOTAL_ brands.",
             "infoEmpty": "Showing _TOTAL_ brands.",
             "sLengthMenu": "Show _MENU_ brands"
         },
         "oLanguage": {
             "sEmptyTable": "No brands available in table."
         },
         "oPaginate": {
             "sPrevious": "<< previous",
             "sNext": "Next >>",
             "sFirst": "<<",
             "sLast": ">>"
         }
     });


     //  For Discount Datatable
     $('#discountdatatable').DataTable({
         "responsive": false,
         "pageLength": 5,
         "lengthMenu": [
             [5, 10, 20, -1],
             [5, 10, 20, 'Todos']
         ],
         "language": {
             "info": "Showing _START_ to _END_ of _TOTAL_ discounts.",
             "infoEmpty": "Showing _TOTAL_ discounts.",
             "sLengthMenu": "Show _MENU_ discounts"
         },
         "oLanguage": {
             "sEmptyTable": "No discounts available in table."
         },
     });

     
     //  For Product List Datatable
     $('#productlistdatatable').DataTable({
         "responsive": false,
         "pageLength": 5,
         "lengthMenu": [
             [5, 10, 20, -1],
             [5, 10, 20, 'Todos']
         ],
         "language": {
             "info": "Showing _START_ to _END_ of _TOTAL_ products.",
             "infoEmpty": "Showing _TOTAL_ products.",
             "sLengthMenu": "Show _MENU_ products",
             "zeroRecords": "No matching products found."
         },
         "oLanguage": {
             "sEmptyTable": "No products available in table."
         },
     });
 </script>

 <script>
     $(document).ready(function () {
         $(".rejectorder").click(function () {
             $('.reasondiv').slideToggle('slow');
         });
         $(".rejectcancel").click(function () {
             $('.undelreason').val('');
             $('.reasondiv').hide('slow');
         });

     });
 </script>

 <script>
     $(document).ready(function () {
         $(".replyorderreason").click(function () {
             $('.orderreasondiv').slideToggle('slow');
             $('.replyorderreason').hide();

         });
         $(".orderreplycancel").click(function () {
             $('.orderreply').val('');
             $('.orderreasondiv').hide('slow');
             $('.replyorderreason').show();

         });

         $(".ordercheckbtn").click(function () {
             $('.ordercomplaintblock').slideToggle('slow');
             //  $('.replyorderreason').hide();

         });

     });
 </script>

 <script>
     var prevVal;
     $("#selectstatus").on("change", function () {
         var val = $(this).find('option:selected').val();
         $(".content").removeClass(`content-${prevVal}`).addClass(`content-${val}`);
         prevVal = val;
     });


     //  Select 2 initialization

     $(document).ready(
         function () {
             $('#formdiscount').select2({
                 placeholder: 'Select Discount'
             }).on('select2:open', () => {
                 $(".select2-results:not(:has(a))").append(
                     '<a  data-bs-toggle="modal" data-bs-target="#add_discount" id="discountbtn" class="btn btn-primary btn-icon btn-sm mt-2 mb-2" style="margin-left: 9px;"><i class="bi bi-plus-circle"></i>Create Discount</a>'
                 ).on('click', function (b) {
                     $('#formdiscount').select2('close');

                 });
             });

         });

     $('#formcategory').select2({
         placeholder: 'Select Category'
     }).on('select2:open', () => {
         $(".select2-results:not(:has(a))").append(
             '<a  data-bs-toggle="modal" data-bs-target="#add_category" id="catbtn" class="btn btn-primary btn-icon btn-sm mt-2 mb-2" style="margin-left: 9px;"><i class="bi bi-plus-circle"></i>Create Category</a>'
         ).on('click', function (b) {
             $('#formcategory').select2('close');

         });
     });

     $('#formcategory').select2({
         placeholder: 'Select Category'
     }).on('select2:open', () => {
         $(".select2-results:not(:has(a))").append(
             '<a  data-bs-toggle="modal" data-bs-target="#add_category" id="catbtn" class="btn btn-primary btn-icon btn-sm mt-2 mb-2" style="margin-left: 9px;"><i class="bi bi-plus-circle"></i>Create Category</a>'
         ).on('click', function (b) {
             $('#formcategory').select2('close');

         });
     });



     $('#formsubcategory').select2({
         placeholder: 'Select Sub-Category'
     }).on('select2:open', () => {
         $(".select2-results:not(:has(a))").append(
             '<a data-bs-toggle="modal" data-bs-target="#add_subcategory" id="subcatbtn" class="btn btn-primary btn-icon btn-sm mt-2 mb-2" style="margin-left: 9px;"><i class="bi bi-plus-circle"></i>Create Sub-Category</a>'
         ).on('click', function (b) {
             $('#formsubcategory').select2('close');

         });
     });


     //  var test = document.getElementById('discountbtn');
     //  test.onclick = function () {
     //      console.log('Hello');
     //  }
     //  if ($("#discountbtn").data('bs.modal') && $("#discountbtn").data('bs.modal').isShown) {
     //      alert('yes');
     //      console.log('Hello');

     //     $('#formdiscount').select2('close');
     //  }

     //  $('#add_attributes').select2({
     //      placeholder: 'Select Attribute'
     //  });
     $('#atttype').select2({
         placeholder: 'Select Attribute Type',
         tags: true
     });
     $('#attvalue').select2({
         placeholder: 'Select Attribute Type',
         //  minimumInputLength: 15,
         multiple: true,
         tags: true,
         tokenSeparators: [',', '']
     });


     //  FOR BANNER SINGLE PRODUCT
     function matchStart(params, data) {
         // If there are no search terms, return all of the data
         if ($.trim(params.term) === '') {
             return data;
         }

         // Skip if there is no 'children' property
         if (typeof data.children === 'undefined') {
             return null;
         }

         // `data.children` contains the actual options that we are matching against
         var filteredChildren = [];
         $.each(data.children, function (idx, child) {
             if (child.text.toUpperCase().indexOf(params.term.toUpperCase()) == 0) {
                 filteredChildren.push(child);
             }
         });

         // If we matched any of the timezone group's children, then set the matched children on the group
         // and return the group object
         if (filteredChildren.length) {
             var modifiedData = $.extend({}, data, true);
             modifiedData.children = filteredChildren;

             // You can return modified objects from here
             // This includes matching the `children` how you want in nested data sets
             return modifiedData;
         }

         // Return `null` if the term should not be displayed
         return null;
     }

     $("#targetproductdiv").select2({
         placeholder: 'Select Single Product',
         matcher: matchStart
     });

     //  FOR BANNER SINGLE PRODUCT

     //  $('#targetmultiproductdiv').select2({
     //      placeholder: 'Select Multiple Products',
     //      search: 'true'
     //  });
     var FRUIT_GROUPSS = [{
             id: '',
             text: 'Citrus',
             children: [{
                     id: 'c1',
                     text: 'Grapefruit'
                 },
                 {
                     id: 'c2',
                     text: 'Orange'
                 },
                 {
                     id: 'c3',
                     text: 'Lemon'
                 },
                 {
                     id: 'c4',
                     text: 'Lime'
                 }
             ]
         },
         {
             id: '',
             text: 'Other',
             children: [{
                     id: 'o1',
                     text: 'Apple'
                 },
                 {
                     id: 'o2',
                     text: 'Mango'
                 },
                 {
                     id: 'o3',
                     text: 'Banana'
                 }
             ]
         }
     ];
     $('#targetmultiproductdiv').select2({
         multiple: true,
         placeholder: "Select Products...",
         data: FRUIT_GROUPSS,
         query: function (options) {
             var selectedIds = options.element.select2('val');
             var selectableGroups = $.map(this.data, function (group) {
                 var areChildrenAllSelected = true;
                 $.each(group.children, function (i, child) {
                     if (selectedIds.indexOf(child.id) < 0) {
                         areChildrenAllSelected = false;
                         return false; // Short-circuit $.each()
                     }
                 });
                 return !areChildrenAllSelected ? group : null;
             });
             options.callback({
                 results: selectableGroups
             });
         }
     }).on('select2-selecting', function (e) {
         var $select = $(this);
         if (e.val == '') {
             e.preventDefault();
             $select.select2('data', $select.select2('data').concat(e.choice.children));
             $select.select2('close');
         }
     });

     $('.editdiscountslab').select2({
         placeholder: 'Select Disount Slab'
     });

     $('#modalcategory').select2({
         placeholder: 'Select Category Name'
     });
 </script>

 <script>
     // FOR ATTRIBUTE MODAL  
     $(document).ready(function () {
         $('#addatt').click(function () {
             $('.attbox').show();
             $('#addatt').hide();
             $('#atttext').hide();
         });
         $('#attclose').click(function () {
             $('#addatt').show();
             $('#atttext').show();
             $('.attbox').hide();
         });
     });

     // FOR ATTRIBUTE TABLE  
     $(document).ready(function () {
         $('.editatt').click(function () {
             $('.attselect').show();
             $('.atttext').hide();
             $('.saveatt').show();
             $('.editatt').hide();
         });
         $('.saveatt').click(function () {
             $('.atttext').show();
             $('.attselect').hide();
             $('.saveatt').hide();
             $('.editatt').show();
         });
     });

     // FOR ATTRIBUTE VALUES DEL  
     $(document).ready(function () {
         $('.delattval').click(function () {
             $('.saveattval').show();
             $('.delattval').hide();
             $(".atttablespan").append("<i class='bi bi-x attvaldel'></i>");
         });
         $('.saveattval').click(function () {
             $(".atttablespan").find("i").remove();
             $('.delattval').show();
             $('.saveattval').hide();
         });
     });
 </script>

 <script>
     //  Form wizard
     $('#wizard1').steps({
         headerTag: 'h3',
         bodyTag: 'section',
         autoFocus: true,
         labels: {
             finish: "Save"
         },
         titleTemplate: '<span class="wizard-index">#index#</span> #title#'
     });

     $('#wizard2').steps({
         headerTag: 'h3',
         bodyTag: 'section',
         autoFocus: true,
         labels: {
             finish: "Save"
         },
         titleTemplate: '<span class="wizard-index">#index#</span> #title#'
     });

     $.fn.steps.reset = function () {
         var wizard = this,
             options = getOptions(this),
             state = getState(this);

         if (state.currentIndex > 0) {
             goToStep(wizard, options, state, 0);

             for (i = 1; i < state.stepCount; i++) {
                 var stepAnchor = getStepAnchor(wizard, i);
                 stepAnchor.parent().removeClass("done")._enableAria(false);
             }
         }
     };

     $('#picker').spectrum({
         type: "flat",
         showInput: true,
         showAlpha: false,
         showButtons: false,
         color: "#f00",
     });
     $('#picker').on('move.spectrum', function (e, tinyColor) {
         var hexVal = tinyColor.toHexString();
         var color_a = document.getElementById('yourcolordummy');
         color_a.style.backgroundColor = hexVal;
     });
     $('#editpicker').spectrum({
         type: "flat",
         showInput: true,
         showAlpha: false,
         showButtons: false,
         color: "#f00",
     });
 </script>

 <script>
     function addItem(elmt) {
         alert(elmt.value);
     }
 </script>


 <!-- Custom Alerts -->
 <script>
     //  FOR ATTRIBUTE
     function attdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this attribute!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((attdel) => {
             if (attdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Product attribute has been deleted.',
                     'success'
                 )
             }
             //  else {
             //     Swal.fire("Your Attributes are safe!");
             //  }
         });
     }

     //  FOR STOCK
     function stockdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this stock!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Product stock has been deleted.',
                     'success'
                 )
             }
             //  else {
             //     Swal.fire("Your Attributes are safe!");
             //  }
         });
     }

     //  FOR CATEGORY
     function catdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this category!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Category has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Category are safe!");
             }
         });
     }

     //  FOR SUB CATEGORY
     function subcatdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this Sub Category!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Sub Category has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Sub Category are safe!");
             }
         });
     }
     //  FOR ALL SUB CATEGORY
     function allsubcatdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete all Sub Category!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'All Sub Category has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("All Sub Category are safe!");
             }
         });
     }

     //  FOR PRODUCTS
     function productdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this Product!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Product has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Product is safe now!");
             }
         });
     }
     //  FOR ALL SUB CATEGORY
     function allproductdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete all Products!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'All Products has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("All Products are safe!");
             }
         });
     }
     //  FOR BRAND PAGE
     function branddelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this Brand!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Brand has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Brand is safe!");
             }
         });
     }
     //  FOR DISCOUNT PAGE
     function discdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this Discount!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Discount has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Discount is safe!");
             }
         });
     }
     //  FOR BANNER PAGE
     function bannerdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this Banner!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Banner has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Banner is safe!");
             }
         });
     }

     //  FOR ATTRIBUTE PAGE
     function attdelconfirmation(ev) {
         ev.preventDefault();
         Swal.fire({
             title: 'Are you sure?',
             text: "You want to delete this Attribute!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonColor: '#3085d6',
             cancelButtonColor: '#d33',
             confirmButtonText: 'Yes, delete it!',
             customClass: {
                 cancelButton: 'order-1',
                 confirmButton: 'order-2'
             }
         }).then((stkdel) => {
             if (stkdel.isConfirmed) {
                 Swal.fire(
                     'Deleted!',
                     'Attribute has been deleted.',
                     'success'
                 )
             } else {
                 Swal.fire("Your Attribute is safe!");
             }
         });
     }
 </script>

 <!-- FOR ATTRIBUTE SELECT ALL -->

 <script type="text/javascript">
     $(document).ready(function () {
         //      let branch_all = [];

         //      function formatResult(state) {
         //          if (!state.id) {
         //              var btn = $(
         //                  '<div class="text-right"><button id="all-branch" style="margin-right: 10px;" class="btn btn-default">Select All</button><button id="clear-branch" class="btn btn-default">Clear All</button></div>'
         //              )
         //              return btn;
         //          }

         //          branch_all.push(state.id);
         //          var id = 'state' + state.id;
         //          var checkbox = $('<div class="checkbox"><input id="' + id + '" type="checkbox" ' + (state
         //                  .selected ? 'checked' : '') + '><label for="checkbox1">' + state.text +
         //              '</label></div>', {
         //                  id: id
         //              });
         //          return checkbox;
         //      }

         //      function arr_diff(a1, a2) {
         //          var a = [],
         //              diff = [];
         //          for (var i = 0; i < a1.length; i++) {
         //              a[a1[i]] = true;
         //          }
         //          for (var i = 0; i < a2.length; i++) {
         //              if (a[a2[i]]) {
         //                  delete a[a2[i]];
         //              } else {
         //                  a[a2[i]] = true;
         //              }
         //          }
         //          for (var k in a) {
         //              diff.push(k);
         //          }
         //          return diff;
         //      }

         //      let optionSelect2 = {
         //          templateResult: formatResult,
         //          closeOnSelect: false,
         //          width: '100%'
         //      };

         //      let $select2 = $("#country").select2(optionSelect2);

         //      var scrollTop;

         //      $select2.on("select2:selecting", function (event) {
         //          var $pr = $('#' + event.params.args.data._resultId).parent();
         //          scrollTop = $pr.prop('scrollTop');
         //      });

         //      $select2.on("select2:select", function (event) {
         //          $(window).scroll();

         //          var $pr = $('#' + event.params.data._resultId).parent();
         //          $pr.prop('scrollTop', scrollTop);

         //          $(this).val().map(function (index) {
         //              $("#state" + index).prop('checked', true);
         //          });
         //      });

         //      $select2.on("select2:unselecting", function (event) {
         //          var $pr = $('#' + event.params.args.data._resultId).parent();
         //          scrollTop = $pr.prop('scrollTop');
         //      });

         //      $select2.on("select2:unselect", function (event) {
         //          $(window).scroll();

         //          var $pr = $('#' + event.params.data._resultId).parent();
         //          $pr.prop('scrollTop', scrollTop);

         //          var branch = $(this).val() ? $(this).val() : [];
         //          var branch_diff = arr_diff(branch_all, branch);
         //          branch_diff.map(function (index) {
         //              $("#state" + index).prop('checked', false);
         //          });
         //      });

         $(document).on("click", "#all-branch", function () {
             $("#country > option").not(':first').prop("selected", true); // Select All Options
             $("#country").trigger("change")
             $(".select2-results__option").not(':first').attr("aria-selected", true);
             $("[id^=state]").prop("checked", true);
             $(window).scroll();
         });

         $(document).on("click", "#clear-branch", function () {
             $("#country > option").not(':first').prop("selected", false);
             $("#country").trigger("change");
             $(".select2-results__option").not(':first').attr("aria-selected", false);
             $("[id^=state]").prop("checked", false);
             $(window).scroll();
         });
     });


     $(".js-select2").select2({
         closeOnSelect: false,
         placeholder: "ADD/SELECT ATTRIBUTE VALUES",
         allowHtml: true,
         allowClear: true,
         tags: true // создает новые опции на лету
     });

     //  function iformat(icon, badge) {
     //      var originalOption = icon.element;
     //      var originalOptionBadge = $(originalOption).data("badge");

     //      return $(
     //          '<span><i class="fa ' +
     //          $(originalOption).data("icon") +
     //          '"></i> ' +
     //          icon.text +
     //          '<span class="badge">' +
     //          originalOptionBadge +
     //          "</span></span>"
     //      );
     //  }
 </script>

 <!-- Ckeditor js -->
 <script>
     if (document.getElementById("productdesc") !== null) {
         ClassicEditor.create(document.querySelector('#productdesc'));
     }
 </script>

 <script>
     //Start - Select 2 Multi-Select Code======================================================
     var Select2MultiCheckBoxObj = [];
     var id_selectElement = 'id_SelectElement';
     var staticWordInID = 'state_';

     function AddItemInSelect2MultiCheckBoxObj(id, IsChecked) {
         if (Select2MultiCheckBoxObj.length > 0) {
             let index = Select2MultiCheckBoxObj.findIndex(x => x.id == id);
             if (index > -1) {
                 Select2MultiCheckBoxObj[index]["IsChecked"] = IsChecked;
             } else {
                 Select2MultiCheckBoxObj.push({
                     "id": id,
                     "IsChecked": IsChecked
                 });
             }
         } else {
             Select2MultiCheckBoxObj.push({
                 "id": id,
                 "IsChecked": IsChecked
             });
         }
     }

     //  function IsCheckedAllOption(trueOrFalse) {
     //      $.map($('#' + id_selectElement + ' option'), function (option) {
     //          AddItemInSelect2MultiCheckBoxObj(option.value, trueOrFalse);
     //      });
     //      $('#' + id_selectElement + " > option").not(':first').prop("selected",
     //          trueOrFalse); //This will select all options and adds in Select2
     //      $("#" + id_selectElement).trigger("change"); //This will effect the changes
     //      $(".select2-results__option").not(':first').attr("aria-selected",
     //          trueOrFalse); //This will make grey color of selected options

     //      $("input[id^='" + staticWordInID + "']").prop("checked", trueOrFalse);
     //    }

     $(document).ready(function () {
         //Begin - Select 2 Multi-Select Code
         $.map($('#' + id_selectElement + ' option'), function (option) {
             AddItemInSelect2MultiCheckBoxObj(option.value, false);
         });

         function formatResult(state) {
             if (Select2MultiCheckBoxObj.length > 0) {
                 var stateId = staticWordInID + state.id;
                 let index = Select2MultiCheckBoxObj.findIndex(x => x.id == state.id);
                 if (index > -1) {
                     var checkbox = $(
                         '<div class="checkbox"><input class="form-check-input select2Checkbox" id="' +
                         stateId + '" type="checkbox" ' + (Select2MultiCheckBoxObj[index]["IsChecked"] ?
                             'checked' : '') +
                         '>&nbsp;&nbsp;<label for="checkbox' + stateId + '">' + state.text +
                         '</label></div>', {
                             id: stateId
                         });
                     return checkbox;
                 }
             }
         }

         let optionSelect2 = {
             templateResult: formatResult,
             closeOnSelect: false,
             width: '100%',
             placeholder: "ADD/SELECT ATTRIBUTE VALUES",
             allowHtml: true,
             //  allowClear: true,
             tags: true,
             multiple: true,
             tokenSeparators: [',']
         };

         let $select2 = $("#" + id_selectElement).select2(optionSelect2);

         $select2.on("select2:select", function (event) {
             $("#" + staticWordInID + event.params.data.id).prop("checked", true);
             AddItemInSelect2MultiCheckBoxObj(event.params.data.id, true);
             //If all options are slected then selectAll option would be also selected.
             if (Select2MultiCheckBoxObj.filter(x => x.IsChecked === false).length === 1) {
                 AddItemInSelect2MultiCheckBoxObj(0, true);
                 $("#" + staticWordInID + "0").prop("checked", true);
             }
         });

         $select2.on("select2:unselect", function (event) {
             $("#" + staticWordInID + "0").prop("checked", false);
             AddItemInSelect2MultiCheckBoxObj(0, false);
             $("#" + staticWordInID + event.params.data.id).prop("checked", false);
             AddItemInSelect2MultiCheckBoxObj(event.params.data.id, false);
         });

         $(document).on("click", "#" + staticWordInID + "0", function () {
             //var b = !($("#state_SelectAll").is(':checked'));
             var b = $("#" + staticWordInID + "0").is(':checked');

             IsCheckedAllOption(b);
             //state_CheckAll = b;
             //$(window).scroll();
         });
         $(document).on("click", ".select2Checkbox", function (event) {
             let selector = "#" + this.id;
             let isChecked = Select2MultiCheckBoxObj[Select2MultiCheckBoxObj.findIndex(x => x.id == this
                 .id.replaceAll(staticWordInID, ''))]['IsChecked'];
             $(selector).prop("checked", isChecked);
         });

     });


     // Select 2 add attribute 
     var Select2MultiCheckBoxObj = [];
     var id_selectElement = 'modalpopupatt';
     var staticWordInID = 'modalpopupatt_';

     function AddItemInSelect2MultiCheckBoxObj(id, IsChecked) {
         if (Select2MultiCheckBoxObj.length > 0) {
             let index = Select2MultiCheckBoxObj.findIndex(x => x.id == id);
             if (index > -1) {
                 Select2MultiCheckBoxObj[index]["IsChecked"] = IsChecked;
             } else {
                 Select2MultiCheckBoxObj.push({
                     "id": id,
                     "IsChecked": IsChecked
                 });
             }
         } else {
             Select2MultiCheckBoxObj.push({
                 "id": id,
                 "IsChecked": IsChecked
             });
         }
     }

     function IsCheckedAllOption(trueOrFalse) {
         $.map($('#' + id_selectElement + ' option'), function (option) {
             AddItemInSelect2MultiCheckBoxObj(option.value, trueOrFalse);
         });
         $('#' + id_selectElement + " > option").not(':first').prop("selected",
             trueOrFalse); //This will select all options and adds in Select2
         $("#" + id_selectElement).trigger("change"); //This will effect the changes
         $(".select2-results__option").not(':first').attr("aria-selected",
             trueOrFalse); //This will make grey color of selected options

         $("input[id^='" + staticWordInID + "']").prop("checked", trueOrFalse);
     }

     $(document).ready(function () {
         //Begin - Select 2 Multi-Select Code
         $.map($('#' + id_selectElement + ' option'), function (option) {
             AddItemInSelect2MultiCheckBoxObj(option.value, false);
         });

         function formatResult(state) {
             if (Select2MultiCheckBoxObj.length > 0) {
                 var stateId = staticWordInID + state.id;
                 let index = Select2MultiCheckBoxObj.findIndex(x => x.id == state.id);
                 if (index > -1) {
                     var checkbox = $(
                         '<div class="checkbox"><input class="form-check-input select2Checkbox" id="' +
                         stateId + '" type="checkbox" ' + (Select2MultiCheckBoxObj[index]["IsChecked"] ?
                             'checked' : '') +
                         '>&nbsp;&nbsp;<label for="checkbox' + stateId + '">' + state.text +
                         '</label></div>', {
                             id: stateId
                         });
                     return checkbox;
                 }
             }
         }

         let optionSelect2 = {
             templateResult: formatResult,
             closeOnSelect: false,
             width: '100%',
             placeholder: "ADD/SELECT ATTRIBUTE VALUES",
             //  allowHtml: true,
             //  allowClear: true,
             tags: true,
             multiple: true,
             tokenSeparators: [',']
         };

         let $select2 = $("#" + id_selectElement).select2(optionSelect2);

         //var scrollTop;
         //$select2.on("select2:selecting", function (event) {
         //    var $pr = $('#' + event.params.args.data._resultId).parent();
         //    scrollTop = $pr.prop('scrollTop');
         //    let xxxx = 2;
         //});

         $select2.on("select2:select", function (event) {
             $("#" + staticWordInID + event.params.data.id).prop("checked", true);
             AddItemInSelect2MultiCheckBoxObj(event.params.data.id, true);
             //If all options are slected then selectAll option would be also selected.
             if (Select2MultiCheckBoxObj.filter(x => x.IsChecked === false).length === 1) {
                 AddItemInSelect2MultiCheckBoxObj(0, true);
                 $("#" + staticWordInID + "0").prop("checked", true);
             }
         });

         $select2.on("select2:unselect", function (event) {
             $("#" + staticWordInID + "0").prop("checked", false);
             AddItemInSelect2MultiCheckBoxObj(0, false);
             $("#" + staticWordInID + event.params.data.id).prop("checked", false);
             AddItemInSelect2MultiCheckBoxObj(event.params.data.id, false);
         });

         $(document).on("click", "#" + staticWordInID + "0", function () {
             //var b = !($("#state_SelectAll").is(':checked'));
             var b = $("#" + staticWordInID + "0").is(':checked');

             IsCheckedAllOption(b);
             //state_CheckAll = b;
             //$(window).scroll();
         });
         $(document).on("click", ".select2Checkbox", function (event) {
             let selector = "#" + this.id;
             let isChecked = Select2MultiCheckBoxObj[Select2MultiCheckBoxObj.findIndex(x => x.id == this
                 .id.replaceAll(staticWordInID, ''))]['IsChecked'];
             $(selector).prop("checked", isChecked);
         });

     });
 </script>

 <script>
     // Select 2 add attribute 
     var AtttypeMultiCheckBoxObj = [];
     var attid_selectElement = 'mulatttype';
     var attstaticWordInID = 'mulatttype_';

     function AddItemInAtttypeMultiCheckBoxObj(id, IsChecked) {
         if (AtttypeMultiCheckBoxObj.length > 0) {
             let index = AtttypeMultiCheckBoxObj.findIndex(x => x.id == id);
             if (index > -1) {
                 AtttypeMultiCheckBoxObj[index]["IsChecked"] = IsChecked;
             } else {
                 AtttypeMultiCheckBoxObj.push({
                     "id": id,
                     "IsChecked": IsChecked
                 });
             }
         } else {
             AtttypeMultiCheckBoxObj.push({
                 "id": id,
                 "IsChecked": IsChecked
             });
         }
     }

     function AttIsCheckedAllOption(trueOrFalse) {
         $.map($('#' + attid_selectElement + ' option'), function (option) {
             AddItemInAtttypeMultiCheckBoxObj(option.value, trueOrFalse);
         });
         $('#' + attid_selectElement + " > option").not(':first').prop("selected",
             trueOrFalse); //This will select all options and adds in Select2
         $("#" + attid_selectElement).trigger("change"); //This will effect the changes
         $(".select2-results__option").not(':first').attr("aria-selected",
             trueOrFalse); //This will make grey color of selected options

         $("input[id^='" + attstaticWordInID + "']").prop("checked", trueOrFalse);
     }

     $(document).ready(function () {
         //Begin - Select 2 Multi-Select Code
         $.map($('#' + attid_selectElement + ' option'), function (option) {
             AddItemInAtttypeMultiCheckBoxObj(option.value, false);
         });

         function formatResult(state) {
             if (AtttypeMultiCheckBoxObj.length > 0) {
                 var stateId = attstaticWordInID + state.id;
                 let index = AtttypeMultiCheckBoxObj.findIndex(x => x.id == state.id);
                 if (index > -1) {
                     var checkbox = $(
                         '<div class="checkbox"><input class="form-check-input attselect2Checkbox" id="' +
                         stateId + '" type="checkbox" ' + (AtttypeMultiCheckBoxObj[index]["IsChecked"] ?
                             'checked' : '') +
                         '>&nbsp;&nbsp;<label for="checkbox' + stateId + '">' + state.text +
                         '</label></div>', {
                             id: stateId
                         });
                     return checkbox;
                 }
             }
         }

         let attoptionSelect2 = {
             templateResult: formatResult,
             closeOnSelect: false,
             width: '100%',
             placeholder: "CREATE/SELECT ATTRIBUTE TYPE",
             allowHtml: true,
             allowClear: true,
             tags: true,
             multiple: true,
             tokenSeparators: [',']
         };

         let $attselect2 = $("#" + attid_selectElement).select2(attoptionSelect2);

         //var scrollTop;
         //$select2.on("select2:selecting", function (event) {
         //    var $pr = $('#' + event.params.args.data._resultId).parent();
         //    scrollTop = $pr.prop('scrollTop');
         //    let xxxx = 2;
         //});

         $attselect2.on("select2:select", function (event) {
             $("#" + attstaticWordInID + event.params.data.id).prop("checked", true);
             AddItemInAtttypeMultiCheckBoxObj(event.params.data.id, true);
             //If all options are slected then selectAll option would be also selected.
             if (Select2MultiCheckBoxObj.filter(x => x.IsChecked === false).length === 1) {
                 AddItemInSelect2MultiCheckBoxObj(0, true);
                 $("#" + attstaticWordInID + "0").prop("checked", true);
             }
         });

         $attselect2.on("select2:unselect", function (event) {
             $("#" + attstaticWordInID + "0").prop("checked", false);
             AddItemInAtttypeMultiCheckBoxObj(0, false);
             $("#" + attstaticWordInID + event.params.data.id).prop("checked", false);
             AddItemInAtttypeMultiCheckBoxObj(event.params.data.id, false);
         });

         $(document).on("click", "#" + attstaticWordInID + "0", function () {
             //var b = !($("#state_SelectAll").is(':checked'));
             var b = $("#" + attstaticWordInID + "0").is(':checked');

             AttIsCheckedAllOption(b);
             //state_CheckAll = b;
             //$(window).scroll();
         });
         $(document).on("click", ".attselect2Checkbox", function (event) {
             let selector = "#" + this.id;
             let isChecked = AtttypeMultiCheckBoxObj[AtttypeMultiCheckBoxObj.findIndex(x => x.id == this
                 .id.replaceAll(attstaticWordInID, ''))]['IsChecked'];
             $(selector).prop("checked", isChecked);
         });

     });
 </script>

 <!-- For Select 2 Add products -->
 <script>
     // Select 2 add attribute 
     var AtttypeMultiCheckBoxObj = [];
     var attid_selectElement = 'mulatttype';
     var attstaticWordInID = 'mulatttype_';

     function AddItemInAtttypeMultiCheckBoxObj(id, IsChecked) {
         if (AtttypeMultiCheckBoxObj.length > 0) {
             let index = AtttypeMultiCheckBoxObj.findIndex(x => x.id == id);
             if (index > -1) {
                 AtttypeMultiCheckBoxObj[index]["IsChecked"] = IsChecked;
             } else {
                 AtttypeMultiCheckBoxObj.push({
                     "id": id,
                     "IsChecked": IsChecked
                 });
             }
         } else {
             AtttypeMultiCheckBoxObj.push({
                 "id": id,
                 "IsChecked": IsChecked
             });
         }
     }

     function AttIsCheckedAllOption(trueOrFalse) {
         $.map($('#' + attid_selectElement + ' option'), function (option) {
             AddItemInAtttypeMultiCheckBoxObj(option.value, trueOrFalse);
         });
         $('#' + attid_selectElement + " > option").not(':first').prop("selected",
             trueOrFalse); //This will select all options and adds in Select2
         $("#" + attid_selectElement).trigger("change"); //This will effect the changes
         $(".select2-results__option").not(':first').attr("aria-selected",
             trueOrFalse); //This will make grey color of selected options

         $("input[id^='" + attstaticWordInID + "']").prop("checked", trueOrFalse);
     }

     $(document).ready(function () {
         //Begin - Select 2 Multi-Select Code
         $.map($('#' + attid_selectElement + ' option'), function (option) {
             AddItemInAtttypeMultiCheckBoxObj(option.value, false);
         });

         function formatResult(state) {
             if (AtttypeMultiCheckBoxObj.length > 0) {
                 var stateId = attstaticWordInID + state.id;
                 let index = AtttypeMultiCheckBoxObj.findIndex(x => x.id == state.id);
                 if (index > -1) {
                     var checkbox = $(
                         '<div class="checkbox"><input class="form-check-input attselect2Checkbox" id="' +
                         stateId + '" type="checkbox" ' + (AtttypeMultiCheckBoxObj[index]["IsChecked"] ?
                             'checked' : '') +
                         '>&nbsp;&nbsp;<label for="checkbox' + stateId + '">' + state.text +
                         '</label></div>', {
                             id: stateId
                         });
                     return checkbox;
                 }
             }
         }

         let attoptionSelect2 = {
             templateResult: formatResult,
             closeOnSelect: false,
             width: '100%',
             placeholder: "CREATE/SELECT ATTRIBUTE TYPE",
             allowHtml: true,
             allowClear: true,
             tags: true,
             multiple: true,
             tokenSeparators: [',']
         };

         let $attselect2 = $("#" + attid_selectElement).select2(attoptionSelect2);

         //var scrollTop;
         //$select2.on("select2:selecting", function (event) {
         //    var $pr = $('#' + event.params.args.data._resultId).parent();
         //    scrollTop = $pr.prop('scrollTop');
         //    let xxxx = 2;
         //});

         $attselect2.on("select2:select", function (event) {
             $("#" + attstaticWordInID + event.params.data.id).prop("checked", true);
             AddItemInAtttypeMultiCheckBoxObj(event.params.data.id, true);
             //If all options are slected then selectAll option would be also selected.
             if (Select2MultiCheckBoxObj.filter(x => x.IsChecked === false).length === 1) {
                 AddItemInSelect2MultiCheckBoxObj(0, true);
                 $("#" + attstaticWordInID + "0").prop("checked", true);
             }
         });

         $attselect2.on("select2:unselect", function (event) {
             $("#" + attstaticWordInID + "0").prop("checked", false);
             AddItemInAtttypeMultiCheckBoxObj(0, false);
             $("#" + attstaticWordInID + event.params.data.id).prop("checked", false);
             AddItemInAtttypeMultiCheckBoxObj(event.params.data.id, false);
         });

         $(document).on("click", "#" + attstaticWordInID + "0", function () {
             //var b = !($("#state_SelectAll").is(':checked'));
             var b = $("#" + attstaticWordInID + "0").is(':checked');

             AttIsCheckedAllOption(b);
             //state_CheckAll = b;
             //$(window).scroll();
         });
         $(document).on("click", ".attselect2Checkbox", function (event) {
             let selector = "#" + this.id;
             let isChecked = AtttypeMultiCheckBoxObj[AtttypeMultiCheckBoxObj.findIndex(x => x.id == this
                 .id.replaceAll(attstaticWordInID, ''))]['IsChecked'];
             $(selector).prop("checked", isChecked);
         });

     });
 </script>


 </body>

 </html>