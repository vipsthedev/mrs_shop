<!DOCTYPE html>
<html>
<head>
    <title>Mobile Repair Invoice</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            padding: 30px;
            font-size: 13px;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .company-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .company-header img {
            width: 100px;
        }
        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .invoice-table td,
        .invoice-table th {
            border: 1px solid #000;
            padding: 10px;
            vertical-align: top;
        }
        .invoice-table th {
            background: #f0f0f0;
            text-align: left;
        }
        .section-title {
            font-weight: bold;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        .images img {
            width: 100px;
            margin: 5px;
            border: 1px solid #ccc;
            padding: 3px;
        }
        .footer {
            text-align: right;
            margin-top: 40px;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="company-header">
        <img src="{{ public_path('assets-fornt/images/logo.png') }}" alt="Logo"><br>
        <strong>Chain App Dev</strong><br>
        Address line here, City<br>
        Phone: +91-1234567890
    </div>

    <h2>Mobile Repair Invoice</h2>

    <table class="invoice-table">
        <tr>
            <th>Customer Name</th>
            <td>{{ $mobileRepairing->customer_name }}</td>
            <th>Email</th>
            <td>{{ $mobileRepairing->customer_email }}</td>
        </tr>
        <tr>
            <th>Address</th>
            <td colspan="3">{{ $mobileRepairing->customer_address }}</td>
        </tr>
        <tr>
            <th>Mobile Name</th>
            <td>{{ $mobileRepairing->customer_mobile_name }}</td>
            <th>Model</th>
            <td>{{ $mobileRepairing->customer_mobile_model }}</td>
        </tr>
        <tr>
            <th>IMI Number</th>
            <td>{{ $mobileRepairing->customer_mobile_imi_number }}</td>
            <th>Status</th>
            <td>
                @php
                    $statusArr = ['Pending', 'Completed', 'Not Possible', 'Other'];
                @endphp
                {{ $statusArr[$mobileRepairing->status] ?? 'Unknown' }}
            </td>
        </tr>
        <tr>
            <th>Problem</th>
            <td colspan="3">{{ $mobileRepairing->customer_mobile_problem }}</td>
        </tr>
        <tr>
            <th>Repair Cost</th>
            <td>{{ $mobileRepairing->repairing_cost }}</td>
            <th>Repair Charge</th>
            <td>{{ $mobileRepairing->repairing_charge }}</td>
        </tr>
        <tr>
            <th>Total Amount</th>
            <td colspan="3"><strong>{{ $mobileRepairing->total_amount }}</strong></td>
        </tr>
        <tr>
            <th>Delivery Date</th>
            <td>{{ $mobileRepairing->delivery_date }}</td>
            <th>Reference Name</th>
            <td>{{ $mobileRepairing->reference_name }}</td>
        </tr>
        <tr>
            <th>Receiver Name</th>
            <td>{{ $mobileRepairing->receiver_person_name }}</td>
            <th>Other Contact</th>
            <td>{{ $mobileRepairing->other_contact_details }}</td>
        </tr>
        <tr>
            <th>Comments</th>
            <td colspan="3">{{ $mobileRepairing->comments }}</td>
        </tr>
    </table>

    @if($mobileRepairing->images->count())
    <div class="section-title">Mobile Images</div>
    <div class="images">
        @foreach($mobileRepairing->images as $image)
            <img src="{{ public_path('mobile-repairing-img/' . $image->mobile_images) }}" alt="Mobile Image">
        @endforeach
    </div>
    @endif

    <div class="footer">
        Authorized Signature ______________________
    </div>

</body>
</html>
