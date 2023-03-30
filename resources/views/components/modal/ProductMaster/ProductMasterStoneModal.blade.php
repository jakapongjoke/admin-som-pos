
<!-- Modal -->
<div class="modal fade product_master_modal_style" id="MasterProductModal" tabindex="-1" role="dialog" aria-labelledby="MasterItemModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Stone Product Master</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="modal_form product_master_form">

<div class="row">
<div class="col-4 image_upload_column">
        <div class="form-group row label-top">


        <div class="status-block">
        <label for="description" class="col-sm-12 col-form-label">Status</label>
          @component('components.modal.form.RadioStatus',['custom_class'=>'status'])

          @endcomponent
        </div>  
        <div class="img_upload_wrapper">
                        <div class="image-upload-preview">
                            <img src="{{URL::asset('images/icons/image_upload.png')}}"
                                class="w-100 h-100" alt="">
                        </div>
                        <input type="file" id="image-input" class="d-none" multiple>
                        <label for="image-input" class="add-image-btn">Add Image</label>
                    </div>
        </div>
</div>
<div class="col-8 product_master_general_info" id="formImage">
                <div class="card">
                    <div class="card-body">
                            <div class="form-group row mb-4">
                            @component('components.util.Code')
                            @endcomponent
                            </div>
                            
                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Stone Group <span style="color:red">*<span></label>
                                <select class="form-control" name="select1">
                                        <option value="">Sapphire</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>                                </div>
                                <div class="col-6">
                                <label class="col-form-label">Stone Name <span style="color:red">*<span></label>
                                    <select class="form-control" name="select1">
                                        <option value="">Pink Sapphire</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                            </div>

                            

                            

                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Stone Shape  <span style="color:red">*<span></label>
                                <select class="form-control" name="select1">
                                        <option value="">Sapphire</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>                                </div>
                                <div class="col-6">
                                <label class="col-form-label">Stone Color </label>
                                    <select class="form-control" name="select1">
                                        <option value="">Pink Sapphire</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                            </div>

                            


                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Clarity</label>
                                <select class="form-control" name="select1">
                                        <option value="">Clarity</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>                                </div>
                                <div class="col-6">
                                <label class="col-form-label">Cutting<span style="color:red">*<span></label>
                                    <select class="form-control" name="select1">
                                        <option value="">Cutting</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>
                                </div>
                            </div>

                            


                            <div class="form-group row">


                                <div class="col-6">
                                <label class="col-form-label">Certificate Type </label>
                                <select class="form-control" name="select1">
                                        <option value="">Sapphire</option>
                                        <option value="option1">Option 1</option>
                                        <option value="option2">Option 2</option>
                                    </select>                                </div>
                                <div class="col-6">
                                <label class="col-form-label">Certificate Image</label>
                                    <input type="file" name="cert_image_file" id="cert_image_file"/>
                                    <label for="cert_image_file" class="cert_image_button"><span class="icon_add_image_plus"><img src="{{URL::asset('images/icons/add.png')}}"></span>
                                    <h4>Add Image</h4>
                                  </label>
                                </div>
                            </div>

                            

                            

                            
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="textarea1"
                                        placeholder="There are many variations of passages"></textarea>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
      </div> 

      <!-- start tab product master info -->  
      <div class="row product_master_info">
      <div class="container mt-5 p-0">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-stones-tab" data-toggle="pill" href="#pills-stones" role="tab"
                    aria-controls="pills-stones" aria-selected="true">Stones</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-component-tab" data-toggle="pill" href="#pills-component" role="tab"
                    aria-controls="pills-component" aria-selected="false">Component</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-processlabour-tab" data-toggle="pill" href="#pills-processlabour"
                    role="tab" aria-controls="pills-processlabour" aria-selected="false">Process Labour</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-stones" role="tabpanel" aria-labelledby="pills-stones-tab">
                <table class="table" id="stoneTable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Stone Group</th>
                            <th>Stone ID</th>
                            <th>Shape</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Weight</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th></th> <!-- For the delete button column -->
                            <th></th> <!-- For the add button column -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="key-number">1</td>
                            <td>
                                <select class="form-control" name="stone-group">
                                    <option value="">Sapphire</option>
                                    <option value="Group 1">Group 1</option>
                                    <option value="Group 2">Group 2</option>
                                    <option value="Group 3">Group 3</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="stone-id" placeholder="Select">
                                    <option value="">PS-ROUND01</option>
                                    <option value="Group 1">DIA-ROUND02</option>
                                    <option value="Group 2">Group 2</option>
                                    <option value="Group 3">Group 3</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-control" name="shape" contenteditable="true"></div>
                            </td>
                            <td>
                                <select class="form-control" name="size">
                                    <option value="">Select</option>
                                    <option value="Group 1">Group 1</option>
                                    <option value="Group 2">Group 2</option>
                                    <option value="Group 3">Group 3</option>
                                </select>
                            </td>
                            <td>
                                <div class="form-control val-txt">
                                    <div class="form-control val-word" name="quantity" contenteditable="true"></div>
                                    <span class="placeholder-text">pcs</span>
                                </div>
                            </td>
                            <td>
                                <div class="form-control val-txt">
                                    <div class="form-control val-word" name="weight" contenteditable="true"></div>
                                    <span class="placeholder-text">cts</span>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-row">
                                    <div class="form-control" name="price" contenteditable="true"></div>
                                    <select class="form-control currency mb-1" name="currency">
                                        <option value="cts">cts</option>
                                        <option value="pcs">pcs</option>
                                        <option value="EUR">EUR</option>
                                        <option value="JPY">JPY</option>
                                    </select>
                                </div>
                            </td>
                            <td><input type="text" class="form-control" name="amount" readonly></td>
                            <td class="px-1"><button class="btn btn-del delete-row-btn"><img
                                        src="https://lh3.googleusercontent.com/pw/AMWts8B2-Kvy0Yi8PrndpGsQbDzhxE-B32riNVkpeXv4or1h6mYzUAt7_mGliKoOy7x1-DMfDIQHHiWl13vIYINM-nGVsRdxStJeEwUcksryclnCtc2uACVlpsL7RE3Q439erqI5nguupk1ctjsViCIzz_X46sHB5NUXWRteOL5196KZy8kS4MXy9sRoHwcOzBLconf23vQpcUgWnRjUwplFfW0NO6D15jqNT3K-QlVkx6sUV5Gn8Nni31PUlWnYNvNNxauqTYhUX3ZMfentxXkWqxXdIyJUTJslWLyYOvSMJcwQo_-uWRCbpukh1MQzejCn1L2N0fwVug-tmIKWXCyPv4eID1zzusOuYbOMaMJHSxoHZ9mFTIvXiAgvnQHc_wkxCiNV0E4zhwRg6oZzCGv2-fXgIhDvFwncSmi9EmbkFcL-SbnMhc5JeomWcYG2MPib8rNk4rFfQSI4HTIOC-VnCmJ_n4WpQV5E_kxj_k1KU3el4CIHO5Mti5gyT3QywtK_tAZQ_j6Bf8ne1Ybv9cXP7yXXMCVvxRciaHjnDhydskdUZTwZeMBh4JgyovNaXTh0Scg_T89GF1dBRcRQV_SYy67YF9IXvw4gYtEj6JVSvggvdyq4I6Sg1qVxVw3Ad2OEy1wpNDsuG8aKYlqcTbPHhlx3RwIYRsUPcMluwIOiJlhxeP1Blb6u06Bw21XOz5GpTJVjsL5DNIb058kq6Y1lBIHsxL8cdRZ-DrjxHnYH3nDvS7ZAMEt2BZ8rT-tJyMRi9D6oDb3-ilam34QAOakLQ4efACY8Q8Ynf_YYfOeiLx_yWv2mqqtBB36sbwoqoopdPmHI8ZispV4KV75kvAmT8mmoZ_UYW4sP_pcyChjxX73TplGE9Gl3D215zFEct7QWQlrXzKDa1RLwhBlAVxnGdsPC4boWOR2DkqPhsfYCqTKihftFW7g-Nhc36fCS=w170-h170-s-no?authuser=0"
                                        width="14px" alt=""></button></td>
                            <td class="px-1 add-row-btn-td"><button class="btn btn-add" id="add-row-btn"><img
                                        src="https://lh3.googleusercontent.com/pw/AMWts8CzIHwivnL1Q7qLfJLa2lpTILa6XooSum3_T7coQJPm6lU8mGe7KnkguRZ5mwJTZ_lZTe0652pTcoghhLOidWKOPKsdycWPLcb-HsV1qykiRtNR_PAoZ9a-P7m5bLKFhqiuatJXwbS9BMTqXGc9oZQ3sTq6OvPSx39ztFoN55TpXB9aB_fpStOeCKcx2OSludl5RzWLRf4LAJuB6KyqY2K1Q0QEBY_q7ttgcRgYMKtLs_27V1Ff9jkWRdkbTp0207SlceQu1wH934AP7sGw_r7q0_2QaFg96ahz8zN6OnqQjjHND0zJdMMqeSZKF2Aw56FDXCxuH86J0De8_jywPSRgGS-0BZdX44UnGiqdbM3Q6Dn4IQmeBRT-eoe39D8dHECZ8hl3m5LPJYYh1c7IOWzT6C091_aaJ0vQFna-upICZX21JalgfJ7-lX1alstLfFjllvSMdiIHX10IsTd9FglwMAP9aINuTUK0X-wooSMSzVSkVwNzAilP3FwqSq8bXUKHzK6787pu0Zzvn0kcwQAN7cbRnrMQFCoymx-IW8Caj-lH0dH7tjBRO3BW6C3z-nnv215GVVIsOhiP1ZLPLxTFVSquaUm5EV5prndKYXACiUBdhijfmCP9VRzlPkuC8Ilr79SEyjYSP13RqvbqhkHf5EXmrQUDtAXiazq5bySiSxIKaPiwjwst-RK-SNggW8Mnk4I-cxL3fDFpLM_NmC2TQEZecENdxheFAy4DOw7OTAiHSBEf59uSl3gMEI5tYf_5F7wHo-eEg1VSUG3VAIwoJwDojOCla0-l8Psg7odNOwKon2iFIesm5YgJEmd_N9DqHqSXTK5tNF3_AzLFhqd-ZRMzIN3uIBN1ourKeR5VuMyMd5ZHPRX1yxN9JG3ekltMGvuKi6wfRrV_fisI4fK2RATjZ41lFZMADLx6Vs8ogN7wP3eD5E7tlS29=w364-h364-s-no?authuser=0"
                                        width="26px" alt=""></button>
                            </td>
                        </tr>

                    </tbody>

                </table>
            </div>
            <div class="tab-pane fade" id="pills-component" role="tabpanel" aria-labelledby="pills-component-tab">
                <table id="componentTable" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Component ID</th>
                            <th>Model</th>
                            <th>Size</th>
                            <th>Quantity</th>
                            <th>Weight</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="key-number">1</td>
                            <td>
                                <select class="form-control" name="component-id">
                                    <option value="">Select a component ID</option>
                                    <option value="1">Component 1</option>
                                    <option value="2">Component 2</option>
                                    <option value="3">Component 3</option>
                                </select>
                            </td>
                            <td><input type="text" class="form-control" name="model"></td>
                            <td>
                                <select class="form-control" name="size">
                                    <option value="">Select a size</option>
                                    <option value="S">Small</option>
                                    <option value="M">Medium</option>
                                    <option value="L">Large</option>
                                </select>
                            </td>
                            <td><input type="number" class="form-control" name="quantity"></td>
                            <td><input type="text" class="form-control" name="weight"></td>
                            <td><input type="text" class="form-control" name="price"></td>
                            <td><input type="text" class="form-control" name="amount" disabled></td>
                            <td class="add-row-btn-td"><button class="btn btn-add"><img
                                        src="https://lh3.googleusercontent.com/pw/AMWts8CzIHwivnL1Q7qLfJLa2lpTILa6XooSum3_T7coQJPm6lU8mGe7KnkguRZ5mwJTZ_lZTe0652pTcoghhLOidWKOPKsdycWPLcb-HsV1qykiRtNR_PAoZ9a-P7m5bLKFhqiuatJXwbS9BMTqXGc9oZQ3sTq6OvPSx39ztFoN55TpXB9aB_fpStOeCKcx2OSludl5RzWLRf4LAJuB6KyqY2K1Q0QEBY_q7ttgcRgYMKtLs_27V1Ff9jkWRdkbTp0207SlceQu1wH934AP7sGw_r7q0_2QaFg96ahz8zN6OnqQjjHND0zJdMMqeSZKF2Aw56FDXCxuH86J0De8_jywPSRgGS-0BZdX44UnGiqdbM3Q6Dn4IQmeBRT-eoe39D8dHECZ8hl3m5LPJYYh1c7IOWzT6C091_aaJ0vQFna-upICZX21JalgfJ7-lX1alstLfFjllvSMdiIHX10IsTd9FglwMAP9aINuTUK0X-wooSMSzVSkVwNzAilP3FwqSq8bXUKHzK6787pu0Zzvn0kcwQAN7cbRnrMQFCoymx-IW8Caj-lH0dH7tjBRO3BW6C3z-nnv215GVVIsOhiP1ZLPLxTFVSquaUm5EV5prndKYXACiUBdhijfmCP9VRzlPkuC8Ilr79SEyjYSP13RqvbqhkHf5EXmrQUDtAXiazq5bySiSxIKaPiwjwst-RK-SNggW8Mnk4I-cxL3fDFpLM_NmC2TQEZecENdxheFAy4DOw7OTAiHSBEf59uSl3gMEI5tYf_5F7wHo-eEg1VSUG3VAIwoJwDojOCla0-l8Psg7odNOwKon2iFIesm5YgJEmd_N9DqHqSXTK5tNF3_AzLFhqd-ZRMzIN3uIBN1ourKeR5VuMyMd5ZHPRX1yxN9JG3ekltMGvuKi6wfRrV_fisI4fK2RATjZ41lFZMADLx6Vs8ogN7wP3eD5E7tlS29=w364-h364-s-no?authuser=0"
                                        width="26px" alt=""></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="pills-processlabour" role="tabpanel"
                aria-labelledby="pills-processlabour-tab">
                <table class="table" id="labourTable">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>CFP</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Add Size</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Platting</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Polish</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Reduce size</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Other</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Setting</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Engraving</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td></td>
                            <td></td>
                            <td rowspan="2">
                                <div>
                                    <textarea class="form-control" rows="3" placeholder="Add Process"></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Cleaning</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="">
                                </div>
                            </td>
                            <td>Take out Stone</td>
                            <td><input type="text" class="form-control" placeholder="100.00 THB"></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Remark</td>
                            <td colspan="8"><input type="text" class="form-control w-100"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
<script>
     window.addEventListener('DOMContentLoaded',  () => {
            // Initialize an array to store image URLs
            let imageUrls = [];
        let count = 0;

        // Listen for file input change events on all image upload inputs
        $('#image-input').on('change', function () {
      
            const input = this;
            const files = input.files;
            const reader = new FileReader();
            reader.onload = function (e) {

            }

        });

        // Listen for delete button click events on all uploaded images
        $('.img_upload_wrapper').on('click', '.delete-image-btn', function () {
            // Get the index of the clicked delete button
            const index = $(this).parent().index();

            // Remove the corresponding image from the preview
            $(this).parent().empty();

            // Remove the corresponding URL from the imageUrls array
            //const deletedImageUrl = imageUrls[index].shift();
            //alert(`Image at index ${index} (${deletedImageUrl}) has been deleted.`);

            if (imageUrls[index].length === 0) {
                imageUrls[index] = null;
            }
        });

        $(function () {
  var tableData = []; // An empty array to store the table data

  // Calculate the amount based on quantity and price
  function calculateAmount() {
    var row = $(this).closest("tr");
    var quantity = row.find("[name=quantity]").val();
    var price = row.find("[name=price]").val();
    var amount = quantity * price;
    row.find("[name=amount]").val(amount.toFixed(2));
    updateTableData(); // Update the table data after calculating the amount
  }

  // Add a new row to the table and update the key numbers
  function addRow() {
    $("#stoneTable tbody tr:last").find(".add-row-btn-td button").remove();
    var newRow = $("#stoneTable tbody tr:first").clone();
    newRow.find("input").val(""); // Clear the input values
    newRow.find("[name=shape]").text(""); // Clear the shape text content
    newRow.find("[name=quantity]").text(""); // Clear the quantity text content
    newRow.find("[name=weight]").text(""); // Clear the weight text content
    newRow.find("[name=price]").text(""); // Clear the price text content
    newRow.find("[name=amount]").text(""); // Clear the amount text content
    newRow.find(".key-number").text($("#stoneTable tbody tr").length + 1); // Update the key number
    $("#stoneTable tbody").append(newRow);
    tableData.push({
      // Add a new empty object to the tableData array
      stoneGroup: "",
      stoneID: "",
      shape: "",
      size: "",
      quantity: "",
      weight: "",
      price: "",
      amount: "",
    });
    // Remove the "Add" button from the previous last row and add it to the new last row
    $("#stoneTable tbody tr:last").prev().find(".add-row-btn-td").empty();
    $("<button>")
      .addClass("btn btn-add")
      .html(
        '<img src="https://lh3.googleusercontent.com/pw/AMWts8CzIHwivnL1Q7qLfJLa2lpTILa6XooSum3_T7coQJPm6lU8mGe7KnkguRZ5mwJTZ_lZTe0652pTcoghhLOidWKOPKsdycWPLcb-HsV1qykiRtNR_PAoZ9a-P7m5bLKFhqiuatJXwbS9BMTqXGc9oZQ3sTq6OvPSx39ztFoN55TpXB9aB_fpStOeCKcx2OSludl5RzWLRf4LAJuB6KyqY2K1Q0QEBY_q7ttgcRgYMKtLs_27V1Ff9jkWRdkbTp0207SlceQu1wH934AP7sGw_r7q0_2QaFg96ahz8zN6OnqQjjHND0zJdMMqeSZKF2Aw56FDXCxuH86J0De8_jywPSRgGS-0BZdX44UnGiqdbM3Q6Dn4IQmeBRT-eoe39D8dHECZ8hl3m5LPJYYh1c7IOWzT6C091_aaJ0vQFna-upICZX21JalgfJ7-lX1alstLfFjllvSMdiIHX10IsTd9FglwMAP9aINuTUK0X-wooSMSzVSkVwNzAilP3FwqSq8bXUKHzK6787pu0Zzvn0kcwQAN7cbRnrMQFCoymx-IW8Caj-lH0dH7tjBRO3BW6C3z-nnv215GVVIsOhiP1ZLPLxTFVSquaUm5EV5prndKYXACiUBdhijfmCP9VRzlPkuC8Ilr79SEyjYSP13RqvbqhkHf5EXmrQUDtAXiazq5bySiSxIKaPiwjwst-RK-SNggW8Mnk4I-cxL3fDFpLM_NmC2TQEZecENdxheFAy4DOw7OTAiHSBEf59uSl3gMEI5tYf_5F7wHo-eEg1VSUG3VAIwoJwDojOCla0-l8Psg7odNOwKon2iFIesm5YgJEmd_N9DqHqSXTK5tNF3_AzLFhqd-ZRMzIN3uIBN1ourKeR5VuMyMd5ZHPRX1yxN9JG3ekltMGvuKi6wfRrV_fisI4fK2RATjZ41lFZMADLx6Vs8ogN7wP3eD5E7tlS29=w364-h364-s-no?authuser=0" width="26px" alt="Add">'
      )
      .appendTo($("#stoneTable tbody tr:last").find(".add-row-btn-td"))
      .on("click", addRow);
  }

  // Delete the current row from the table
  function deleteRow() {
    if ($("#stoneTable tbody tr").length > 1) {
      // Only delete if there is more than one row
      var row = $(this).closest("tr");
      var rowIndex = row.index();
      var prevRow = row.prev();
      if (row.find(".add-row-btn-td button").length) {
        // If the row being deleted contains an add button
        prevRow
          .find(".add-row-btn-td")
          .append(row.find(".add-row-btn-td button")); // Move the add button to the previous row
      }
      row.remove();
      // Update the key numbers
      $("#stoneTable tbody tr").each(function (index) {
        $(this)
          .find(".key-number")
          .text(index + 1);
      });
      tableData.splice(rowIndex, 1); // Remove the corresponding object from the tableData array
    }
  }

  // Update the tableData array with the current input values
  function updateTableData() {
    $("#stoneTable tbody tr").each(function (rowIndex) {
      var row = $(this);
      tableData[rowIndex] = {
        stoneGroup: row.find("[name=stone-group]").val(),
        stoneID: row.find("[name=stone-id]").val(),
        shape: row.find("[name=shape]").text(),
        size: row.find("[name=size]").val(),
        quantity: row.find("[name=quantity]").val(),
        weight: row.find("[name=weight]").val(),
        currency: row.find("[name=currency]").val(),
        price: row.find("[name=price]").val(),
        amount: row.find("[name=amount]").val(),
      };
    });
  }

  // Bind the "Add" button click event
  $("#add-row-btn").on("click", addRow);

  // Bind the "Delete" button click
  $("#stoneTable").on("click", ".delete-row-btn", deleteRow);

  // Bind the quantity and price input change events
  $("#stoneTable").on(
    "change",
    "[name=quantity], [name=price]",
    calculateAmount
  );

  // Trigger the "Add" button click event to add the first row
  //$("#add-row-btn").trigger("click");

  // Output the table data to the console
  console.log(tableData);
});
$(function () {
  var componentData = [];

  // Calculate the amount based on quantity and price
  function calculateAmountComponent() {
    var row = $(this).closest("tr");
    var quantity = row.find("[name=quantity]").val();
    var price = row.find("[name=price]").val();
    var amount = quantity * price;
    row.find("[name=amount]").val(amount.toFixed(2));
    updatecomponentData(); // Update the table data after calculating the amount
  }

  // Add a new row to the table and update the key numbers
  function addComponentRow() {
    var lastRow = $("#componentTable tbody tr:last");
    lastRow.find(".add-row-btn-td button").remove();
    var newRow = lastRow.clone();
    newRow.find("input").val(""); // Clear the input values
    newRow.find("[name=model]").text(""); // Clear the model text content
    newRow.find("[name=quantity]").text(""); // Clear the quantity text content
    newRow.find("[name=weight]").text(""); // Clear the weight text content
    newRow.find("[name=price]").text(""); // Clear the price text content
    newRow.find("[name=amount]").text(""); // Clear the amount text content
    newRow.find(".key-number").text($("#componentTable tbody tr").length + 1); // Update the key number

    // Add form-control class to select inputs
    newRow.find("[name=size]").addClass("form-control");
    newRow.find("[name=component-id]").addClass("form-control");

    lastRow.after(newRow);
    componentData.push({
      // Add a new empty object to the componentData array
      componentID: "",
      model: "",
      size: "",
      quantity: "",
      weight: "",
      price: "",
      amount: "",
    });
    // Remove the "Add" button from the previous last row and add it to the new last row
    lastRow.find(".add-row-btn-td").empty();
    $("<button>")
      .addClass("btn btn-add")
      .html(
        '<img src="https://lh3.googleusercontent.com/pw/AMWts8CzIHwivnL1Q7qLfJLa2lpTILa6XooSum3_T7coQJPm6lU8mGe7KnkguRZ5mwJTZ_lZTe0652pTcoghhLOidWKOPKsdycWPLcb-HsV1qykiRtNR_PAoZ9a-P7m5bLKFhqiuatJXwbS9BMTqXGc9oZQ3sTq6OvPSx39ztFoN55TpXB9aB_fpStOeCKcx2OSludl5RzWLRf4LAJuB6KyqY2K1Q0QEBY_q7ttgcRgYMKtLs_27V1Ff9jkWRdkbTp0207SlceQu1wH934AP7sGw_r7q0_2QaFg96ahz8zN6OnqQjjHND0zJdMMqeSZKF2Aw56FDXCxuH86J0De8_jywPSRgGS-0BZdX44UnGiqdbM3Q6Dn4IQmeBRT-eoe39D8dHECZ8hl3m5LPJYYh1c7IOWzT6C091_aaJ0vQFna-upICZX21JalgfJ7-lX1alstLfFjllvSMdiIHX10IsTd9FglwMAP9aINuTUK0X-wooSMSzVSkVwNzAilP3FwqSq8bXUKHzK6787pu0Zzvn0kcwQAN7cbRnrMQFCoymx-IW8Caj-lH0dH7tjBRO3BW6C3z-nnv215GVVIsOhiP1ZLPLxTFVSquaUm5EV5prndKYXACiUBdhijfmCP9VRzlPkuC8Ilr79SEyjYSP13RqvbqhkHf5EXmrQUDtAXiazq5bySiSxIKaPiwjwst-RK-SNggW8Mnk4I-cxL3fDFpLM_NmC2TQEZecENdxheFAy4DOw7OTAiHSBEf59uSl3gMEI5tYf_5F7wHo-eEg1VSUG3VAIwoJwDojOCla0-l8Psg7odNOwKon2iFIesm5YgJEmd_N9DqHqSXTK5tNF3_AzLFhqd-ZRMzIN3uIBN1ourKeR5VuMyMd5ZHPRX1yxN9JG3ekltMGvuKi6wfRrV_fisI4fK2RATjZ41lFZMADLx6Vs8ogN7wP3eD5E7tlS29=w364-h364-s-no?authuser=0" width="26px" alt="Add">'
      )
      .appendTo(newRow.find(".add-row-btn-td"))
      .on("click", addComponentRow);
  }

  // Update the componentData array with the current input values
  function updatecomponentData() {
    $("#componentTable tbody tr").each(function (rowIndex) {
      var row = $(this);
      componentData[rowIndex] = {
        componentID: row.find("[name=component-id]").val(),
        model: row.find("[name=model]").val(),
        size: row.find("[name=size]").val(),
        quantity: row.find("[name=quantity]").val(),
        weight: row.find("[name=weight]").val(),
        price: row.find("[name=price]").val(),
        amount: row.find("[name=amount]").val(),
      };
    });
  }

  // Bind the "Add" button click event
  $("#componentTable").on("click", ".btn-add", addComponentRow);

  // Bind the quantity and price input change events
  $("#componentTable").on(
    "change",
    "[name=quantity], [name=price]",
    calculateAmountComponent
  );

  // Output the table data to the console
  console.log(componentData);
});

    });

    
</script>