<!DOCTYPE html>
      <!-- Website - www.codingnepalweb.com -->
      <html lang="en" dir="ltr">
        <head>
          <meta charset="UTF-8" />
          <title>customer-list</title>
          <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
          <link rel="stylesheet" href="{{asset('assets/css/userlist.css')}}" />
          <link rel="stylesheet" href="{{asset('assets/fontawesome-free-6.5.1-web/css/all.css')}}" />
          <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        </head>
        <body>

            @include('components/sidebarall')
            
                <h1>User List</h1>
                @isset($users)
                @endisset
            
            <table id="userlist" border="1">
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
              </tr>
              @foreach($users as $user )
                  <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                  </tr>
              @endforeach
          </table>
         
        </section>
      
          <script src="{{asset('assets/js/script.js')}}"></script>
        </body>
      </html>
      