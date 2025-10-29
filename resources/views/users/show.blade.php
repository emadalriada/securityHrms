@extends('layouts.app')

@section('title', 'عرض بيانات الموظف')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">بيانات الموظف</h2>
        <div class="space-x-2 space-x-reverse">
            <a href="{{ route('users.edit', $user) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                تعديل
            </a>
            <a href="{{ route('users.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                رجوع
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">البريد الإلكتروني</h3>
            <p class="text-gray-600">{{ $user->email }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الاسم بالإنجليزية</h3>
            <p class="text-gray-600">{{ $user->nameEnglish ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الاسم بالعربية</h3>
            <p class="text-gray-600">{{ $user->nameArabic ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الرقم القومي</h3>
            <p class="text-gray-600">{{ $user->nationalId ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الشركة</h3>
            <p class="text-gray-600">{{ $user->company ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">نوع العمل</h3>
            <p class="text-gray-600">{{ $user->workType ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">كود الشركة</h3>
            <p class="text-gray-600">{{ $user->companyCode ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الموقع</h3>
            <p class="text-gray-600">{{ $user->location ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">رقم الهاتف</h3>
            <p class="text-gray-600">{{ $user->telephone ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">رقم الهاتف 2</h3>
            <p class="text-gray-600">{{ $user->telephone2 ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">تاريخ البداية</h3>
            <p class="text-gray-600">{{ $user->startDate?->format('Y-m-d') ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">تاريخ الميلاد</h3>
            <p class="text-gray-600">{{ $user->birthDate?->format('Y-m-d') ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">المسمى الوظيفي</h3>
            <p class="text-gray-600">{{ $user->jobTitle ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">المؤهل</h3>
            <p class="text-gray-600">{{ $user->education ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">المنطقة</h3>
            <p class="text-gray-600">{{ $user->area ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">نائب الرئيس</h3>
            <p class="text-gray-600">{{ $user->vp ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">تاريخ الخروج</h3>
            <p class="text-gray-600">{{ $user->leaveDate?->format('Y-m-d') ?? 'غير محدد' }}</p>
        </div>

        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">سبب الخروج</h3>
            <p class="text-gray-600">{{ $user->reasonOfLeaving ?? 'غير محدد' }}</p>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">العنوان</h3>
            <p class="text-gray-600">{{ $user->address ?? 'غير محدد' }}</p>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">ملاحظات</h3>
            <p class="text-gray-600">{{ $user->notes ?? 'غير محدد' }}</p>
        </div>

        <div class="md:col-span-2">
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الحالة</h3>
            <div class="flex flex-wrap gap-2">
                @if($user->hr)
                    <span class="bg-blue-100 text-blue-800 text-sm font-medium px-3 py-1 rounded">موارد بشرية</span>
                @endif
                @if($user->dataChecked)
                    <span class="bg-green-100 text-green-800 text-sm font-medium px-3 py-1 rounded">تم مراجعة البيانات</span>
                @endif
                @if($user->photoDone)
                    <span class="bg-purple-100 text-purple-800 text-sm font-medium px-3 py-1 rounded">تم التصوير</span>
                @endif
                @if($user->idDone)
                    <span class="bg-yellow-100 text-yellow-800 text-sm font-medium px-3 py-1 rounded">تم عمل الهوية</span>
                @endif
                @if($user->allThingsDone)
                    <span class="bg-teal-100 text-teal-800 text-sm font-medium px-3 py-1 rounded">تم كل شيء</span>
                @endif
                @if($user->out)
                    <span class="bg-red-100 text-red-800 text-sm font-medium px-3 py-1 rounded">خارج</span>
                @endif
            </div>
        </div>

        @if($user->personalPhoto)
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الصورة الشخصية</h3>
            <img src="{{ asset('storage/' . $user->personalPhoto) }}" alt="Personal Photo" class="w-48 h-48 object-cover rounded-lg shadow">
        </div>
        @endif

        @if($user->nationalIdFront)
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الهوية الوطنية (الأمام)</h3>
            <img src="{{ asset('storage/' . $user->nationalIdFront) }}" alt="National ID Front" class="w-48 h-48 object-cover rounded-lg shadow">
        </div>
        @endif

        @if($user->nationalIdBack)
        <div>
            <h3 class="text-lg font-semibold text-gray-700 mb-2">الهوية الوطنية (الخلف)</h3>
            <img src="{{ asset('storage/' . $user->nationalIdBack) }}" alt="National ID Back" class="w-48 h-48 object-cover rounded-lg shadow">
        </div>
        @endif
    </div>
</div>
@endsection
