<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Penjualan Yuzastore</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @media print {
            @page { margin: 2cm; size: A4 portrait; }
            body { background-color: white !important; }
            .no-print { display: none !important; }
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: white;
            color: #374151;
        }
        /* Border tabel yang konsisten untuk print */
        table, th, td {
            border: 1px solid #d1d5db;
        }
    </style>
</head>
<body class="p-8 md:p-12 bg-white">
    
    <div class="max-w-4xl mx-auto">
        
        <!-- Header -->
        <div class="text-center mb-8 pb-4 border-b-2 border-gray-800">
            <h1 class="text-3xl font-black text-gray-800 uppercase tracking-wider">
                LAPORAN PENJUALAN Yuzastore
            </h1>
            @if($startDate && $endDate)
                <p class="text-sm text-gray-500 mt-2">
                    Periode: {{ \Carbon\Carbon::parse($startDate)->format('d M Y') }} - {{ \Carbon\Carbon::parse($endDate)->format('d M Y') }}
                </p>
            @else
                <p class="text-sm text-gray-500 mt-2">
                    Periode: Seluruh Waktu Transaksi
                </p>
            @endif
        </div>

        <!-- Table -->
        <table class="w-full border-collapse mb-8">
            <thead>
                <tr class="text-gray-800 text-xs font-bold uppercase">
                    <th class="py-3 px-3 text-left w-12">NO</th>
                    <th class="py-3 px-3 text-left">TANGGAL & WAKTU</th>
                    <th class="py-3 px-3 text-left">NOMOR INVOICE</th>
                    <th class="py-3 px-3 text-left">NAMA PELANGGAN</th>
                    <th class="py-3 px-3 text-left">NOMINAL TRANSAKSI<br>(RP)</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-700">
                @forelse ($orders as $idx => $order)
                    <tr>
                        <td class="py-3 px-3">{{ $idx + 1 }}</td>
                        <td class="py-3 px-3 whitespace-nowrap">{{ $order->created_at->format('d/m/Y H:i') }}</td>
                        <td class="py-3 px-3 font-bold text-gray-900">{{ $order->invoice_number }}</td>
                        <td class="py-3 px-3 italic">{{ $order->user->name }}</td>
                        <td class="py-3 px-3">{{ number_format($order->total_amount, 0, ',', '.') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 text-center text-gray-500 italic">
                            Tidak ada data transaksi selesai pada periode ini.
                        </td>
                    </tr>
                @endforelse
            </tbody>
            
            @if(count($orders) > 0)
                <tfoot>
                    <tr class="border-t-2 border-gray-800">
                        <td colspan="4" class="py-4 px-3 font-bold text-gray-800 uppercase text-sm">
                            TOTAL OMSET BERSIH:
                        </td>
                        <td class="py-4 px-3 font-bold text-teal-600 text-base">
                            Rp {{ number_format($totalRevenue, 0, ',', '.') }}
                        </td>
                    </tr>
                </tfoot>
            @endif
        </table>

        <!-- Footer -->
        <div class="flex justify-between items-start mt-20 text-sm text-gray-600">
            <div>
                <p class="mb-2">Dicetak pada: {{ \Carbon\Carbon::now()->format('d M Y, H:i') }}</p>
                <p>Sistem E-Commerce Yuzastore terverifikasi.</p>
            </div>
            <div class="text-center">
                <p class="mb-16">Mengetahui,</p>
                <div class="border-t border-gray-800 pt-2 w-48 mx-auto">
                    <p class="text-gray-700">Owner Yuzastore</p>
                </div>
            </div>
        </div>
        
    </div>

    <script>
        window.onload = function() {
            window.print();
        }
    </script>
</body>
</html>