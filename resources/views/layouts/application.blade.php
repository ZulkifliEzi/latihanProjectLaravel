<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta httpequiv="XUACompatible" content="IE=edge">
      <meta name="viewport" content="width=devicewidth, initialscale=1">
      <meta name="csrf-token" content="{!! csrf_token() !!}"/>
      <title>Zulkifli</title>
      <link href="/css/bootstrap.css" rel="stylesheet" />
      <link href="/css/bootstrap-material-design.css" rel="stylesheet" />
      <link href="/css/ripples.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    </head>
    <body style="padding-top:60px;">
      <!--bagian navigation-->
      @include('shared.head_nav')
      <!-- Bagian Content -->
      <div class="container clearfix">
        <div class="row row-offcanvas row-offcanvas-left ">
          <!--Bagian Kiri-->
          @include("shared.left_nav")

          <!--Bagian Kanan-->
          <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
            <div class="panel-body">
              @if (Session::has('error'))
                <div class="session-flash alert-danger">
                    {{Session::get('error')}}
                </div>
              @endif
              @if (Session::has('notice'))
                <div class="session-flash alert-info">
                    {{Session::get('notice')}}
                </div>
              @endif
              <div class="row">
                <div class="form-group label-floating">
                  <label class="col-lg-2" for="keywords">Search Article</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="keywords" placeholder="Keywords">
                  </div>
                  <div class="col-lg-2">
                    <button id="search" class="btn btn-info btn-flat" type="button">Search</button>
                  </div>
                </div>
              </diV>
              <div class="clear"></div>
              <div id="data-content">
                @yield("content")
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="/js/jquery-1.12.3.js"></script>
      <script src="/js/bootstrap.js"></script>
      <script src="/js/material.js"></script>
      <script src="/js/ripples.js"></script>
      <script>
        $.material.init();
      </script>

      <!--for handle article view-->
      <script>
        $('#article_link').click(function(e){
          e.preventDefault();
          $.ajax({
            url:'/articles',
            type:"GET",
            dataType: "json",
            success: function (data)
            {
              $('#data-content').html(data['view']);
            },
            error: function (xhr, status)
            {
              console.log(xhr.error);
            }
          });
        });
      </script>
      <!--for handle ajax pagination-->
      <script>
        $(document).ready(function() {
            $(document).on('click', '.pagination a', function(e) {
            get_page($(this).attr('href').split('page=')[1]);
            e.preventDefault();
          });
        });

        function get_page(page) {
        $.ajax({
          url : '/articles?page=' + page,
          type : 'GET',
          dataType : 'json',
          success : function(data) {
            $('#data-content').html(data['view']);
          },
          error : function(xhr, status, error) {
            console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);
          },
          complete : function() {
              alreadyloading = false;
          }
        });
        }
        </script>
        <!--for handle ajax search-->
        <script>
          $('#search').on('click', function(){
          $.ajax({
              url : '/articles',
              type : 'GET',
              dataType : 'json',
              data : {
                'keywords' : $('#keywords').val()
              },
              success : function(data) {
                $('#data-content').html(data['view']);
              },
              error : function(xhr, status) {
                console.log(xhr.error + " ERROR STATUS : " + status);
              },

              complete : function() {
                alreadyloading = false;
              }
            });
          });
          </script>
          <!--for handle ajax sorting-->
          <script>
              $(document).ready(function() {
                $(document).on('click', '#id', function(e) {
                  sort_articles();
                  e.preventDefault();
                });
              });
              function sort_articles() {
                $('#id').on('click', function() {
                  $.ajax({
                    url : '/articles',
                    typs : 'GET',
                    dataType : 'json',
                    data : {
                      "direction" : $('#direction').val()
                    },

                    success : function(data) {
                      $('#articles-list').html(data['view']);
                      $('#direction').val(data['direction']);
                      if(data['direction'] == 'asc') {
                        $('i#ic-direction').attr({class: "fa fa-arrow-up"});
                      } else {
                        $('i#ic-direction').attr({class: "fa fa-arrow-down"});
                      }
                    },

                    error : function(xhr, status, error) {
                      console.log(xhr.error + "\n ERROR STATUS : " + status + "\n" + error);
                    },
                    complete : function() {
                      alreadyloading = false;
                    }
                  });
                });
              }
              </script>
    </body>
  </html>
