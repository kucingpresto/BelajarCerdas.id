@include('components/sidebar_beranda', ['headerSideNav' => 'Batch Detail'])

@if (Auth::user()->role === 'Administrator')
    <div class="home-beranda z-[-1] md:z-0 mt-[80px] md:mt-0">
        <div class="content-beranda">
            <div class="overflow-x-auto mt-8 pb-20">
                <table id="tablePaymentTanyaMentor" class="table">
                    <thead id="thead-table-payment-tanya-mentor" class="hidden">
                        <tr>
                            <th class="!text-center border border-gray-300 w-10">
                                No
                            </th>
                            <th class="!text-center border border-gray-300">
                                Harga Soal
                            </th>
                            <th class="!text-center border border-gray-300">
                                Status Verifikasi
                            </th>
                            <th class="!text-center border border-gray-300">
                                Verifikasi Oleh
                            </th>
                        </tr>
                    </thead>

                    <tbody id="tbodyPaymentTanyaMentor">
                        <!-- show data in ajax -->
                    </tbody>
                </table>

                <div class="pagination-container-payment-tanya-mentor flex justify-center my-4 sm:my-0">
                </div>

                <div id="emptyMessage-riwayat-payment-tanya-mentor"
                    class="w-full h-96 hidden bg-white shadow-lg rounded-md border">
                    <span class="w-full h-full flex items-center justify-center">
                        Tidak ada batch detail pembayaran tanya.
                    </span>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="flex flex-col min-h-screen items-center justify-center">
        <p>ALERT SEMENTARA</p>
        <p>You do not have access to this pages.</p>
    </div>
@endif
