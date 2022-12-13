 @include('layout.dashboard-header')

    
<div class="app-wrapper">
	    
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

      <h1 class="text-center mb-4">AGENTS</h1>
          
			<table class="table table-bordered">
        <thead>
          <tr class="text-center">
            <th colspan="6"><span class="mr-4">ADD AN AGENT</span>
              <form action="{{ route('details.create') }}" method="GET" class="ml-4 d-inline" >
              <button type="submit" class="btn btn-info text-white fw-bold">ADD-AGENT</button>
            </form></th>
            
          </tr>
        </thead>
                <thead>
                  <tr class="text-center">
                    <th scope="col">Id</th>
                    <th scope="col">Agent-name</th>
                    <th scope="col">About-Agent</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Details</th>
                  </tr>
                </thead>
                <tbody>
                 @forelse ($agents as $agent)
                 <tr>
                    <th scope="row">{{ $agent->id }}</th>
                    <td>{{ $agent->agent_name }}</td>
                    <td>{{ $agent->about_agent }}</td>
                    <td>
                        <form action="{{ route('details.edit',$agent->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-success text-white fw-bold">EDIT</button>

                        </form>
                    </td>
                    <td> <form action="{{ route('details.destroy',$agent->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger text-white fw-bold">DELETE</button>

                    </form></td>
                    <td>
                        <form action="{{ route('details.show',$agent->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-secondary">VIEW</button>
                    </form></td>
                  </tr>
                     
                 @empty
                     
                 @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
   @include('layout.dashboard-footer')