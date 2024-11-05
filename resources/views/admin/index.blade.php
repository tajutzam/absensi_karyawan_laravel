@extends('layouts.admin')

@section('content')
    <div class="flex justify-between mt-3 mx-5">
        <div class="flex flex-col">
            <h2 class="text-2xl font-bold">Data Karyawan</h2>
            <div class="flex flex-row">
                <p class="text-gray-500">Karyawan / <span class="text-black">Data Karyawan</span></p>
            </div>
        </div>
        <button onclick="openModal()" class="px-6 py-2 bg-[#86DED7] rounded-lg text-white">Tambah Karyawan <i
                class="fa-solid fa-plus text-white"></i> </button>
    </div>

    <div id="modalTambahKaryawan" class="modal mt-20">
        <div class="modal-header">
            <div class="flex justify-between">
                <h2>Tambah Karyawan</h2>
                <button onclick="closeModal()" class="close-modal" id="closeModal">X</button>
            </div>
        </div>
        <div class="modal-content">
            <form action="" method="POST">
                @csrf
                <div class="grid grid-cols-2 items-center justify-start text-start gap-5">
                    <div>
                        <label for="nip" class="block text-sm font-medium">NIP</label>
                        <input type="text" name="nip" id="nip" class="mt-1 block w-full border rounded-md p-2"
                            required>
                    </div>
                    <div>
                        <label for="divisi" class="block text-sm font-medium">Divisi</label>
                        <input type="text" name="divisi" id="divisi" class="mt-1 block w-full border rounded-md p-2"
                            required>
                    </div>
                    <div>
                        <label for="department" class="block text-sm font-medium">Department</label>
                        <input type="text" name="department" id="department"
                            class="mt-1 block w-full border rounded-md p-2" required>
                    </div>
                    <div>
                        <label for="section" class="block text-sm font-medium">Section</label>
                        <input type="text" name="section" id="section" class="mt-1 block w-full border rounded-md p-2"
                            required>
                    </div>
                    <div>
                        <label for="position" class="block text-sm font-medium">Position</label>
                        <input type="text" name="position" id="position" class="mt-1 block w-full border rounded-md p-2"
                            required>
                    </div>
                    <div>
                        <label for="status" class="block text-sm font-medium">Status</label>
                        <select name="status" id="status" class="mt-1 block w-full border rounded-md p-2" required>
                            <option value="Active">Active</option>
                            <option value="Inactive">Inactive</option>
                        </select>
                    </div>
                    <div>
                        <label for="age" class="block text-sm font-medium">Age</label>
                        <input type="number" name="age" id="age" class="mt-1 block w-full border rounded-md p-2"
                            required>
                    </div>
                    <div>
                        <label for="start_date" class="block text-sm font-medium">Start Date</label>
                        <input type="date" name="start_date" id="start_date"
                            class="mt-1 block w-full border rounded-md p-2" required>
                    </div>
                    <div>
                        <label for="salary" class="block text-sm font-medium">Salary</label>
                        <input type="number" name="salary" id="salary" class="mt-1 block w-full border rounded-md p-2"
                            required>
                    </div>
                    <div>
                        <label for="salary" class="block text-sm font-medium">Image</label>
                        <input type="file" name="salary" id="salary"
                            class="mt-1 block w-full text-gray-400 font-semibold text-sm bg-white border file:cursor-pointer cursor-pointer file:border-0 file:py-3 file:px-4 file:mr-4 file:bg-gray-100 file:hover:bg-gray-200 file:text-gray-500 rounded"
                            required>
                    </div>


                </div>
                <div class="mt-4 w-full">
                    <button type="submit" class="px-20 py-2 bg-[#86DED7] rounded-lg text-white">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <div class="mx-5 mt-5">
        <table id="karyawanTable" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profile Karyawan</th>
                    <th>NIP</th>
                    <th>Divisi</th>
                    <th>Department</th>
                    <th>Section</th>
                    <th>Posisi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ([[], [], [], []] as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="/assets/images/user-persegi.png" class="thumbnail h-12 rounded-full" alt="Profile" />
                        </td>
                        <td>123456</td>
                        <td>IT</td>
                        <td>Development</td>
                        <td>Backend</td>
                        <td>Developer</td>
                        <td class="">
                            <span class="px-4 py-2 rounded-lg"
                                style="background-color: rgba(103, 255, 83, 0.41) !important;">Active</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    <script>
        new DataTable('#karyawanTable');

        function openModal() {
            document.getElementById('modalTambahKaryawan').classList.add('show')
        }

        function closeModal() {
            document.getElementById('modalTambahKaryawan').classList.remove('show')
        }
    </script>
@endsection
