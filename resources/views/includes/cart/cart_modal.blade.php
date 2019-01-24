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
                <ul id="cart-elements" class="list-group">
                    @for ($i = 0; $i < 4; $i++) @php ($price=2.99)

                    <li id="li-{{$i}}" class="list-group-item cart-item">

                        <img src="images/lechepil-50px.png" alt="Small picture of a product">
                        
                        <input id="input-{{$i}}" type="number" name="points" min="1" max="9" value="1" onchange=
                            "
                            var texto = document.getElementById('product-{{$i}}');
                            texto.textContent = 
                            'Chocolatada PIL : $ ' + (document.getElementById('input-{{$i}}').value * {{$price}}).toFixed(2);
                            ">
                        <span id="product-{{$i}}">Chocolatada PIL : $ {{$price}} </span>


                        <button id="btn-{{$i}}" class="btn float-right" onclick="
                        var element = document.getElementById('li-{{$i}}');
                        element.parentNode.removeChild(element);
                        "><i class="fas fa-trash-alt"></i></button>
                    </li>

                    @endfor
                </ul>
            </div>
            <div class="modal-footer"><button class="btn btn-danger float-right btn-block" onclick="
                document.getElementById('cart-elements').innerHTML = '';
            ">Remove All</button></div>
        </div>
    </div>
</div>
