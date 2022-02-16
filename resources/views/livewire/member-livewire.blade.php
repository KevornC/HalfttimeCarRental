<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @if($viewMode==false)
    <div class="inline-block h-screen min-w-full py-2 mt-16 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-blue-50">
              <tr>
                <th  colspan="7" scope="col" class="px-6 py-3 font-medium tracking-wider text-center text-gray-500 uppercase text-md">
                  Listing
                </th>
              </tr>
            </thead>
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Firstname
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Lastname
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Gender
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Address
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Country
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Email
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Telephone
                </th>
               <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  License
                </th>
                 {{-- <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Edit</span>
                </th> --}}
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              @forelse ($memberInfo as $member)
              <tr>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['fname']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['lname']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['gender']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['address']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['country']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['email']}}
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  {{$member['phone']}}
                </td>
                
                <?php $photo=$member['photo']; ?>
                <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href='{{url("storage/carUploads/docUploads/$photo")}}' target="_blank" class="text-indigo-600 hover:text-indigo-900">view</a>
                </td>
                {{-- <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                </td> --}}
              </tr>
              @empty
              <td colspan="7" class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">No data available</a>
              </td>
              @endforelse
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
   @endif
</div>
