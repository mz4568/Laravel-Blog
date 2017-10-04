 @include('partials._head')
 @include('partials._javascript')
<div class="panel-body">
            <!-- <form class="form-horizontal m-t-20" action="index.html"> -->
             
            <form action="{{ url('/login') }}" method="POST">
               
                 {{ csrf_field() }}

                <div class="col-md-4">
                </div>

                  <div class="col-md-4">
                     @include('partials._message')
                     <div class="form-group">
                     <input class="form-control" type="text" required='' name="email" placeholder="Enter Email">
                     </div>

                     <div class="form-group">
                     <input class="form-control" type="password" required='' name="password" placeholder="Enter Password">
                     </div>

                     <div class="form-group">
                     <button type='submit' class="form-control btn btn-success btn-block"> login In </button>
                     </div>

                  </div>
                <div class="col-md-4">
                </div>

               
            </form> 
  </div>   