<div class="row  p-3 shadow bg-light rounded border m-1"><!----start of row div------>
            <div class="mt-3 col-xl-12 col-lg-12 col-md-6 col-sm-6 col-xs-6"><br>
                    <h1 class="text-center  p-3 shadow bg-light rounded border m-1 mb-3" id="Categories">Product Categories</h1></div>

        
       
                    <ul class="list-inline text-center col-12 ">
                     @foreach ($category as $categories)
                         
                           
                    <li class="list-inline-item p-3 shadow bg-light rounded border m-1"> <a href="/category/{{$categories->category_name}}"> <img src="/images/products_small/114-8220-1_28.jpg" alt=""><br>
                    <h3>{{$categories->category_name}}</h3></a>
                </li>
                @endforeach
                   
                    </ul>
                          
              
                    </div> 
            </div>
        </div> <!---end of row div---->