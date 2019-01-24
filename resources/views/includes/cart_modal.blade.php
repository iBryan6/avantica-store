<!-- The Modal -->
<div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h3 class="modal-title"><i class="fa fa-shopping-cart"></i> Cart Items</h3>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item cart-item">
                            <img src="images/lechepil-50px.png" alt="Small picture of a product">
                            @php ($price=2.99)
                            <input id="input" type="number" name="points" min="0" max="9" value="1" onchange="
                            var texto = document.getElementById('product_span');
                            texto.textContent = 'Chocolatada PIL : $ ' + (document.getElementById('input').value * {{$price}}).toFixed(2);">
                            <span id="product_span">Chocolatada PIL : $ {{$price}} </span>
                            <button class="btn  float-right"><i class="fas fa-trash-alt"></i></button>
                        </li>
                        <li class="list-group-item cart-item">
                            <img src="images/lechepil-50px.png" alt="Small picture of a product">
                            @php ($price=2.99)
                            <input id="input2" type="number" name="points" min="0" max="9" value="1" onchange="
                                var texto = document.getElementById('product_span2');
                                texto.textContent = 'Chocolatada PIL : $ ' + (document.getElementById('input2').value * {{$price}}).toFixed(2);">
                            <span id="product_span2">Chocolatada PIL : $ {{$price}} </span>
                            <button class="btn  float-right"><i class="fas fa-trash-alt"></i></button>
                        </li>
                        <li class="list-group-item cart-item">
                            <img src="images/lechepil-50px.png" alt="Small picture of a product">
                            @php ($price=2.99)
                            <input id="input3" type="number" name="points" min="0" max="9" value="1" onchange="
                                    var texto = document.getElementById('product_span3');
                                    texto.textContent = 'Chocolatada PIL : $ ' + (document.getElementById('input3').value * {{$price}}).toFixed(2);">
                            <span id="product_span3">Chocolatada PIL : $ {{$price}} </span>
                            <button class="btn  float-right"><i class="fas fa-trash-alt"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="modal-footer"><button class="btn btn-danger float-right btn-block">Remove All</button></div>
                

            </div>
        </div>
    </div>