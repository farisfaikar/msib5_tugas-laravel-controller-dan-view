@extends('layouts.main')

@section('container')
  <section class="mx-auto max-w-screen-xl p-4">
    <h1 class="max-w-2xl mb-8 text-4xl font-extrabold leading-none md:text-left text-center md:text-5xl xl:text-6xl dark:text-white">About</h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-4">
      <table class="w-full text-left text-md text-gray-500 dark:text-gray-400">
        <tbody>
          <tr class="">
            <th scope="row" class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
              Name
            </th>
            <td class="px-6 py-4">
              {{ $data['name'] }}
            </td>
          </tr>
          <tr class="border-y border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
              Job
            </th>
            <td class="px-6 py-4">
              {{ $data['job'] }}
            </td>
          </tr>
          <tr class="border-y border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
              Hobby
            </th>
            <td class="px-6 py-4">
              {{ $data['hobby'] }}
            </td>
          </tr>
          <tr class="border-y border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
              Favorite Food
            </th>
            <td class="px-6 py-4">
              {{ $data['favorite_food'] }}
            </td>
          </tr>
          <tr class="border-y border-gray-200 dark:border-gray-700">
            <th scope="row" class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
              Email
            </th>
            <td class="px-6 py-4">
              {{ $data['email'] }}
            </td>
          </tr>
          <tr class="">
            <th scope="row" class="whitespace-nowrap bg-gray-50 px-6 py-4 font-medium text-gray-900 dark:bg-gray-800 dark:text-white">
              Phone
            </th>
            <td class="px-6 py-4">
              {{ $data['phone'] }}
            </td>
          </tr>
        </tbody>
      </table>
    </div>

  </section>
@endsection
