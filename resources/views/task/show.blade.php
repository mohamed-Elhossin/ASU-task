@extends('layout.app')


@section('content')
    <div class="container">
        <h1> صفحه عرض </h1>
        <div class="card">
            <div class="card-body">
                <table class="table border border-primary">

                    <tr class="border border-info">
                        <th class="border"> حاله الموافقه  </th>
                        <th class="border">{{ $item->status }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> رقم الوثيقه </th>
                        <th class="border">{{ $item->id }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border">1. أسم الباحث الرئيسي ( رباعي ) باللغة العربية </th>
                        <th class="border">{{ $item->fullNameAr }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border">2. أسم الباحث الرئيسي ( رباعي ) باللغة الإنجليزية </th>
                        <th class="border">{{ $item->fullNameEn }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 3. الرقم القومي للباحث الرئيسي </th>
                        <th class="border">{{ $item->notionalId }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 4. جهة العمل </th>
                        <th class="border">{{ $item->workStation }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 5. الأيميل الرسمي التي سيتم عليه التواصل </th>
                        <th class="border">{{ $item->email  }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border">6. رقم التليفون </th>
                        <th class="border">{{ $item->phone }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 7. رقم الواتس أب </th>
                        <th class="border">{{ $item->whatsAppNumber }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 8. الدرجة العلمية الحاصل عليها الباحث </th>
                        <th class="border">{{ $item->educationdegree }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border">9. القسم الأكاديمي التابع له </th>
                        <th class="border">{{ $item->mejor }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 10. التخصص الأكاديمي </th>
                        <th class="border">{{ $item->mejor2 }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border">11. سنة القيد </th>
                        <th class="border">{{ $item->joinDate }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 12. نوع البحث : </th>
                        <th class="border">{{ $item->reashrchType }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 13. المعدل التراكمي (GPA) للباحث المقيد بالدراسات العليا </th>
                        <th class="border">{{ $item->GPA }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 14. أسم البحث باللغة العربية : </th>
                        <th class="border">{{ $item->reasarchNameAr }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 15. أسم البحث باللغة الإنجليزية : </th>
                        <th class="border">{{ $item->reasarchNameEn }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border">16. أسم المشرف الرئيسي </th>
                        <th class="border">{{ $item->superNameAr }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 17. المؤسسة التابع لها المشرف الرئيسي </th>
                        <th class="border">{{ $item->orgSuperName }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 18. أسم المشرف المساعد</th>
                        <th class="border">{{ $item->superAssestNameEn }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 19. المؤسسة التابع لها المشرف المساعد </th>
                        <th class="border">{{ $item->orgnizationName }}</th>
                    </tr>
                    <tr class="border border-info">
                        <th class="border"> 20. رقم الموافقة المستنيرة: 22.06.01
                        </th>
                        <th class="border">{{ $item->numberOfApprove }}</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
