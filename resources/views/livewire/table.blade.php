<div> 

   <div class="flex flex-col mt-8 mb-4">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="max-w-lg w-full lg:max-w-xs">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input id="search"
                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                            placeholder="Search" type="search">
                    </div>
                </div>
                
            </div>  



    <div class="relative overflow-x-auto shadow-md rounded-lg mt-8">
    
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50">

          <tr>
            @foreach($this->columns() as $column)
 
                <th wire:click="sort('{{ $column->key }}')">
                    <div class="py-3 px-6 flex items-center cursor-pointer">
                      {{ $column->label }}
                      @if($sortBy === $column->key)
                        @if ($sortDirection === 'asc')
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                               fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M14.707 10.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 12.586V5a1 1 0 012 0v7.586l2.293-2.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"/>
                          </svg>
                        @else
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                               fill="currentColor">
                              <path fill-rule="evenodd"
                                    d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"/>
                          </svg>
                        @endif
                      @endif
                    </div>
                </th>
            @endforeach
          </tr>
        </thead>

        <tbody>
          @foreach($this->data() as $row)
            <tr class="bg-white border-b hover:bg-gray-50">
              @foreach($this->columns() as $column)
                <td>
                  <div class="py-3 px-6 flex items-center cursor-pointer">
                    <x-dynamic-component
                        :component="$column->component"
                        :value="$row[$column->key]"
                    >
                    </x-dynamic-component>
                  </div>
                </td>
              @endforeach
            </tr>
          @endforeach
        </tbody>
      </table>
       
    </div>
    
  
   <div class="container mx-auto mt-8 px-4"> 
     {{ $this->data()->links() }}
     </div>

    <div class="text-3xl text-purple-900 text-center">
        @php  $str = "\u{03A8}";//  
        echo $str;
        @endphp
    </div>
  </div>