<form class="admin-insert-form" action="product_entry_server.php" method="POST">
    <h3>add product</h3>

    <div class="div-input">
        <label for="">product name:</label>
        <input style="width: 80%;" type="text" name="product_name" id="">
    </div>


    <div class="div-input">
        <label for="">old price:</label>
        <input type="number" name="old_price" id="" min="0">

    </div>


    <div class="div-input">
        <label for="">new price:</label>
        <input type="number" name="new_price" id="" min="0">
    </div>


    <div class="div-input div-input-popular">
        <label for="">popular:</label>
        <input type="checkbox" name="popular" id="" value="off">
    </div>



    <div class="div-input div-input-special-offer">
        <label for="">special offer:</label>
        <input type="checkbox" name="special_offer" id="" value="off">
    </div>



    <div class="div-input">
        <label for="">product description:</label>
        <textarea name="product_desc" rows="10" cols="100" id=""></textarea>
    </div>

    <div class="div-input">
        <label for="">stock:</label>
        <input type="number" name="stock" id="" value="0" min="0">
    </div>

    <div class="div-input">
        <label for="">image 1:</label>
        <input type="file" name="img1" id="">
    </div>

    <div class="div-input">
        <label for="">image 2:</label>
        <input type="file" name="img2" id="">
    </div>

    <div class="div-input">
        <label for="">image 3:</label>
        <input type="file" name="img3" id="">
    </div>

    <div class="div-input">
        <label for="">image 4:</label>
        <input type="file" name="img4" id="">
    </div>

    <div class="div-input">
        <label for="">image 5:</label>
        <input type="file" name="img5" id="">
    </div>

    <div class="div-input">
        <label for="">image 6:</label>
        <input type="file" name="img6" id="">
    </div>



    <button type="submit">add
        <i class="material-icons">add_task</i>
    </button>

</form>