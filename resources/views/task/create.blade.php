@extends('layout.app')


@section('content')
    @if (Session::has('done'))
        <div class="alert alert-success">
{{ Session::get("done") }}
        </div>
    @endif
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger mx-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('task.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> 1. أسم الباحث الرئيسي ( رباعي ) باللغة العربية <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="fullNameAr" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> 2. أسم الباحث الرئيسي ( رباعي ) باللغة الإنجليزية <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="fullNameEn" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> 3. الرقم القومي للباحث الرئيسي <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="notionalId" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">4. جهة العمل <i class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="workStation" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> 5. الأيميل الرسمي التي سيتم عليه التواصل <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">6. رقم التليفون <i class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="phone" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">7. رقم الواتس أب <i class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="whatsAppNumber" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">8. الدرجة العلمية الحاصل عليها الباحث <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="educationdegree" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">9. القسم الأكاديمي التابع له <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="mejor" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">10. التخصص الأكاديمي<i class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="mejor2" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">11. سنة القيد <i class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="joinDate" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">12. نوع البحث :<i class="fa-solid fa-circle-exclamation"></i></label>
                        <select name="reashrchType" class="form-control">
                            <option value="بروتوكول ماجستير ">بروتوكول ماجستير </option>
                            <option value="بروتوكول دكتوراه ">بروتوكول دكتوراه </option>
                            <option value="بحث مقتبس من رسالة الماجستير ">بحث مقتبس من رسالة الماجستير </option>
                            <option value="بحث مقتبس من رسالة الدكتوراه ">بحث مقتبس من رسالة الدكتوراه </option>
                            <option value="ابحاث ترقية ">ابحاث ترقية </option>
                            <option value="مشروعات بحثية ">مشروعات بحثية </option>
                            <option value="ابحاث حرة  ">ابحاث حرة </option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">13. المعدل التراكمي (GPA) للباحث المقيد بالدراسات العليا <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="GPA" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">14. أسم البحث باللغة العربية :<i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="reasarchNameAr" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">15. أسم البحث باللغة الإنجليزية : <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="reasarchNameEn" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">16. أسم المشرف الرئيسي <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="superNameAr" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">17. المؤسسة التابع لها المشرف الرئيسي <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="orgSuperName" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">18. أسم المشرف المساعد<i class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="superAssestNameEn" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> 19. المؤسسة التابع لها المشرف المساعد <i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="orgnizationName" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">20. رقم الموافقة المستنيرة: 22.06.01<i
                                class="fa-solid fa-circle-exclamation"></i></label>
                        <input type="text" name="numberOfApprove" class="form-control">
                    </div>
                </div>
            </div>
            <button class="btn btn-info"> ارسل البيانات </button>
        </form>
    </div>
@endsection
