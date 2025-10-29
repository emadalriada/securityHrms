@extends('layouts.app')

@section('title', 'تعديل بيانات الموظف')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <h2 class="text-2xl font-bold mb-6">تعديل بيانات الموظف</h2>

    <form action="{{ route('users.update', $user) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Email -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    البريد الإلكتروني <span class="text-red-500">*</span>
                </label>
                <input type="email" name="email" id="email" required
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('email', $user->email) }}">
            </div>

            <!-- Password -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    كلمة المرور (اتركه فارغاً إذا لم ترد التغيير)
                </label>
                <input type="password" name="password" id="password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Name English -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nameEnglish">
                    الاسم بالإنجليزية
                </label>
                <input type="text" name="nameEnglish" id="nameEnglish"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('nameEnglish', $user->nameEnglish) }}">
            </div>

            <!-- Name Arabic -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nameArabic">
                    الاسم بالعربية
                </label>
                <input type="text" name="nameArabic" id="nameArabic"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('nameArabic', $user->nameArabic) }}">
            </div>

            <!-- National ID -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nationalId">
                    الرقم القومي
                </label>
                <input type="text" name="nationalId" id="nationalId"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('nationalId', $user->nationalId) }}">
            </div>

            <!-- Company -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="company">
                    الشركة
                </label>
                <input type="text" name="company" id="company"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('company', $user->company) }}">
            </div>

            <!-- Work Type -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="workType">
                    نوع العمل
                </label>
                <input type="text" name="workType" id="workType"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('workType', $user->workType) }}">
            </div>

            <!-- Company Code -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="companyCode">
                    كود الشركة
                </label>
                <input type="text" name="companyCode" id="companyCode"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('companyCode', $user->companyCode) }}">
            </div>

            <!-- Location -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="location">
                    الموقع
                </label>
                <input type="text" name="location" id="location"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('location', $user->location) }}">
            </div>

            <!-- Telephone -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone">
                    رقم الهاتف
                </label>
                <input type="text" name="telephone" id="telephone"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('telephone', $user->telephone) }}">
            </div>

            <!-- Telephone 2 -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="telephone2">
                    رقم الهاتف 2
                </label>
                <input type="text" name="telephone2" id="telephone2"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('telephone2', $user->telephone2) }}">
            </div>

            <!-- Start Date -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="startDate">
                    تاريخ البداية
                </label>
                <input type="date" name="startDate" id="startDate"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('startDate', $user->startDate?->format('Y-m-d')) }}">
            </div>

            <!-- Birth Date -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="birthDate">
                    تاريخ الميلاد
                </label>
                <input type="date" name="birthDate" id="birthDate"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('birthDate', $user->birthDate?->format('Y-m-d')) }}">
            </div>

            <!-- Job Title -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="jobTitle">
                    المسمى الوظيفي
                </label>
                <input type="text" name="jobTitle" id="jobTitle"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('jobTitle', $user->jobTitle) }}">
            </div>

            <!-- Education -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="education">
                    المؤهل
                </label>
                <input type="text" name="education" id="education"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('education', $user->education) }}">
            </div>

            <!-- Area -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="area">
                    المنطقة
                </label>
                <input type="text" name="area" id="area"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('area', $user->area) }}">
            </div>

            <!-- VP -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="vp">
                    نائب الرئيس
                </label>
                <input type="text" name="vp" id="vp"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('vp', $user->vp) }}">
            </div>

            <!-- Leave Date -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="leaveDate">
                    تاريخ الخروج
                </label>
                <input type="date" name="leaveDate" id="leaveDate"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('leaveDate', $user->leaveDate?->format('Y-m-d')) }}">
            </div>

            <!-- Reason of Leaving -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="reasonOfLeaving">
                    سبب الخروج
                </label>
                <input type="text" name="reasonOfLeaving" id="reasonOfLeaving"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    value="{{ old('reasonOfLeaving', $user->reasonOfLeaving) }}">
            </div>

            <!-- Address -->
            <div class="md:col-span-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                    العنوان
                </label>
                <textarea name="address" id="address" rows="3"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('address', $user->address) }}</textarea>
            </div>

            <!-- Notes -->
            <div class="md:col-span-2">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="notes">
                    ملاحظات
                </label>
                <textarea name="notes" id="notes" rows="3"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('notes', $user->notes) }}</textarea>
            </div>

            <!-- Personal Photo -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="personalPhoto">
                    الصورة الشخصية
                </label>
                @if($user->personalPhoto)
                    <img src="{{ asset('storage/' . $user->personalPhoto) }}" alt="Personal Photo" class="mb-2 w-32 h-32 object-cover">
                @endif
                <input type="file" name="personalPhoto" id="personalPhoto" accept="image/*"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- National ID Front -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nationalIdFront">
                    الهوية الوطنية (الأمام)
                </label>
                @if($user->nationalIdFront)
                    <img src="{{ asset('storage/' . $user->nationalIdFront) }}" alt="National ID Front" class="mb-2 w-32 h-32 object-cover">
                @endif
                <input type="file" name="nationalIdFront" id="nationalIdFront" accept="image/*"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- National ID Back -->
            <div>
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nationalIdBack">
                    الهوية الوطنية (الخلف)
                </label>
                @if($user->nationalIdBack)
                    <img src="{{ asset('storage/' . $user->nationalIdBack) }}" alt="National ID Back" class="mb-2 w-32 h-32 object-cover">
                @endif
                <input type="file" name="nationalIdBack" id="nationalIdBack" accept="image/*"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <!-- Checkboxes -->
            <div class="md:col-span-2 grid grid-cols-2 md:grid-cols-3 gap-4">
                <div class="flex items-center">
                    <input type="checkbox" name="hr" id="hr" value="1" {{ old('hr', $user->hr) ? 'checked' : '' }}
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <label for="hr" class="mr-2 text-sm text-gray-700">موارد بشرية</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="dataChecked" id="dataChecked" value="1" {{ old('dataChecked', $user->dataChecked) ? 'checked' : '' }}
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <label for="dataChecked" class="mr-2 text-sm text-gray-700">تم مراجعة البيانات</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="photoDone" id="photoDone" value="1" {{ old('photoDone', $user->photoDone) ? 'checked' : '' }}
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <label for="photoDone" class="mr-2 text-sm text-gray-700">تم التصوير</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="idDone" id="idDone" value="1" {{ old('idDone', $user->idDone) ? 'checked' : '' }}
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <label for="idDone" class="mr-2 text-sm text-gray-700">تم عمل الهوية</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="allThingsDone" id="allThingsDone" value="1" {{ old('allThingsDone', $user->allThingsDone) ? 'checked' : '' }}
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <label for="allThingsDone" class="mr-2 text-sm text-gray-700">تم كل شيء</label>
                </div>

                <div class="flex items-center">
                    <input type="checkbox" name="out" id="out" value="1" {{ old('out', $user->out) ? 'checked' : '' }}
                        class="rounded border-gray-300 text-blue-600 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    <label for="out" class="mr-2 text-sm text-gray-700">خارج</label>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-6">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                تحديث
            </button>
            <a href="{{ route('users.index') }}" class="text-gray-600 hover:text-gray-900">
                إلغاء
            </a>
        </div>
    </form>
</div>
@endsection
