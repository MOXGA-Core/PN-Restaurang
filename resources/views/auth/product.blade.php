@extends('layouts.app')

@section('content')
    <style>
        .items{
            color: red;
        }
    </style>
    <script>
        // Create a "close" button and append it to each list item
        var myNodelist = document.getElementsByClassName("items");
        var i;
        for (i = 0; i < myNodelist.length; i++) {
            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            myNodelist[i].appendChild(span);
        }

        // Click on a close button to hide the current list item
        var close = document.getElementsByClassName("close");
        var i;
        for (i = 0; i < close.length; i++) {
            close[i].onclick = function() {
                var div = this.parentElement;
                div.style.display = "none";
            }
        }

        // Add a "checked" symbol when clicking on a list item
        var list = document.querySelector('ul');
        list.addEventListener('click', function(ev) {
            if (ev.target.tagName === 'LI') {
                ev.target.classList.toggle('checked');
            }
        }, false);

        // Create a new list item when clicking on the "Add" button
        function newElement() {
            var li = document.createElement("li");
            var inputValue = document.getElementById("myInput").value;
            var TypeValue = document.getElementById("TypeValue").value;
            var t = document.createTextNode(TypeValue + '  (' + inputValue + ')');

            li.appendChild(t);

            if (inputValue === '') {
                alert("You must write something!");
            } else {
                var input = document.createElement("input");

                input.setAttribute("type", "hidden");

                input.setAttribute("name", "prices["+ TypeValue +"]");

                input.setAttribute("value", inputValue);

                document.getElementById("myUL").appendChild(li);
                document.getElementById("myUL").appendChild(input);
            }
            document.getElementById("myInput").value = "";

            var span = document.createElement("SPAN");
            var txt = document.createTextNode("\u00D7");
            span.className = "close";
            span.appendChild(txt);
            li.appendChild(span);
            li.className= "items";
            for (i = 0; i < close.length; i++) {
                close[i].onclick = function() {
                    var div = this.parentElement;
                    div.style.display = "none";
                }
            }
        }
        </script>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Add Product

                    </div>

                    <div class="panel-body">
                        <div align="center" class="row" style="width: 80%; margin-left: 20px">
                            <form method="post" action="{{ url('/admin/product') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Name</span>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>

                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Category</span>
                                    <select name="category" class="form-control">
                                        @foreach($categories as $category)
                                        <option value="{{ $category->category }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                <br>
                                <div>
                                    <div class="col-md-5">
                                    <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Type</span>
                                    <select name="type" class="form-control" id="TypeValue">
                                        @foreach($types as $type)
                                            <option value="{{ $type->type }}">{{ $type->type }}</option>
                                        @endforeach
                                    </select>
                                    </div>
                                    </div>
                                    <div class="col-md-5">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1">Price</span>
                                        <input type="number" name="amount[]"  id="myInput" class="form-control" placeholder="0.00"
                                               aria-describedby="basic-addon1">
                                    </div>
                                    </div>


                                            <a href="javascript:newElement();">Add</a>


                                </div>
                                <br>
                                <br>
                                <ul id="myUL">
                                </ul>
                                <br>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Tag</span>
                                    <input type="text" name="tag" class="form-control" placeholder="pomotion,"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Detail</span>
                                    <input type="text" name="detail" class="form-control" placeholder="Detail"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Poster</span>
                                    <input type="file" name="picture" class="form-control"
                                           aria-describedby="basic-addon1">
                                </div>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1">Picture</span>
                                    <input type="file" name="photos[]" class="form-control"
                                           aria-describedby="basic-addon1" multiple >
                                </div>
                                <br>
                                <div class="btn-group">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                                <div class="btn-group">
                                    <a type="button" href="{{ url('/admin/home') }}" class="btn btn-danger">Cancel</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
