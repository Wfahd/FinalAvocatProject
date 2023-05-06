@extends('layouts.app')
@section('content')
<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <div class="max-w-md pt-4 mx-auto">
        <form method="POST" action="{{route('etapes.store', ['id' => $affaire->id])}}" class="max-w-md mx-auto p-4 bg-gray-100 rounded-md shadow-md"> @csrf
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="deadline">
                Deadline
              </label>
              <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="deadline" type="date" placeholder="Deadline">
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="next_step">
                notes
              </label>
              <textarea class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="notes" type="text" placeholder="Next Step"></textarea>
            </div>
            <div class="mb-4">
              <label class="block text-gray-700 font-bold mb-2" for="document">
                Document
              </label>
              <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="document" type="file" placeholder="Document">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="deadline">
                  Next-step
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="next_step" type="text" placeholder="next_step">
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="deadline">
                  Affaire-id
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="case-id" value="{{$affaire->id}}" placeholder="next_step">
              </div>
            <div class="flex items-center justify-between">
              <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Save
              </button>
            </div>
          </form>
          
      
</x-layout>

  @endsection
