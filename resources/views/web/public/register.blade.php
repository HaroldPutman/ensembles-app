@extends('web.layouts.master')

@section('title', 'Registration')

@section('content')
<section class="mx-auto w-full md:w-3/4 px-6">
    <header class="mx-auto max-w-2xl md:text-center">
        <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-dark sm:text-4xl">Registration</h1>
        <p class="mt-6 text-lg leading-8">
          Let's get your student signed up for <strong class="font-bold">{{ $course->name }}</strong>.
        </p>
        @if ($course->duration > 1)
        <p class="mt-6 text-lg leading-8">
          This class meets {{ strtolower($course->start->format('l')) }}s at {{ $course->start->format('g:i A') }} for {{ $course->duration }} weeks starting {{ $course->start->format('M d') }}.
          It is open to students {{ strtolower($course->age_range) }}.
          @if ($course->donation)
            There is no charge for this class.
          @else
            The cost is ${{ $course->price }}.
          @endif
        </p>
        @else
        <p class="mt-6 text-lg leading-8">
          This event is on {{ $course->start->format('l, M d') }} at {{ $course->start->format('g:i A') }}.
          It is open to students {{ strtolower($course->age_range) }}. The cost is ${{ $course->price }}.
        </p>
        @endif
    </header>
    <article>
        @if ($errors->any())
            <div class="mt-6 bg-error-mist border border-error text-error-dark px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <ul class="md:mx-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="contact-us" action="{{route('register-create')}}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <input type="hidden" name="courseId" value="{{ $course->id }}"/>
            <!-- filled in after birthdate is entered -->
            <input type="hidden" name="age" value=""/>
            <div>
                <label for="student_firstname" class="block mb-1 text-left text-sm font-medium text-gray-dark">Student name</label>
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" id="student_firstname" name="student_firstname" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Student First Name" required>
                    <input type="text" id="student_lastname" name="student_lastname" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Student Last Name" required>
                </div>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label for="birthdate" class="block mb-1 text-left text-sm font-medium text-gray-dark">Student birthdate <small class="text-xs">(enter like 3/21/1974)</small></label>
                    <input type="text" id="birthdate" name="birthdate" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="mm/dd/yyyy" required pattern="(0[1-9]|1[12])\/(0[1-9]|[12][0-9]|3[01])\/(19|20)\d{2}">
                </div>
            </div>
            <div>
                <label for="firstname" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your name <small class="text-xs">(enter it again if you are the student)</small></label>
                <div class="grid grid-cols-2 gap-4">
                    <input type="text" id="firstname" name="firstname" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="First Name" required>
                    <input type="text" id="lastname" name="lastname" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="Last Name" required>
                </div>
            </div>
            <div>
                <label for="email" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your email</label>
                <input type="email" id="email" name="email" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="mail@example.com" required>
            </div>
            <div>
                <label for="address" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your address</label>
                <textarea id="address" name="address" rows="2" class="block p-2.5 w-full text-sm text-gray-dark bg-gray-mist rounded-md shadow-sm border border-gray-light focus:ring-primary focus:border-primary-500" placeholder="street address"></textarea>
            </div>
            <div class="grid grid-cols-4 gap-4">
            <div class="md:col-span-2 col-span-4">
                <label for="city" class="block mb-1 text-left text-sm font-medium text-gray-dark">City</label>
                <input type="text" id="city" name="city" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="city" required>
            </div>
            <div class="md:col-span-1 col-span-2">
                <label for="state" class="block mb-1 text-left text-sm font-medium text-gray-dark">State</label>
                <select id="state" name="state" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" required>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN" selected>Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="md:col-span-1 col-span-2">
                <label for="zip" class="block mb-1 text-left text-sm font-medium text-gray-dark">ZIP code</label>
                <input type="text" id="zip" name="zip" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="ZIP code" required>
            </div>
            </div>
            <div>
                <label for="phone" class="block mb-1 text-left text-sm font-medium text-gray-dark">Your phone</label>
                <input type="text" id="phone" name="phone" class="shadow-sm bg-gray-mist border border-gray-light text-gray-dark text-sm rounded-md focus:ring-primary focus:border-primary block w-full p-2.5" placeholder="000-000-0000" required pattern=".*\d{3}.*\d{3}.*\d{4}\s*">
            </div>
            <div>
                <label for="note" class="block mb-1 text-left text-sm font-medium text-gray-dark">Student allergies, health concerns, etc...</label>
                <textarea id="note" name="note" rows="2" class="block p-2.5 w-full text-sm text-gray-dark bg-gray-mist rounded-md shadow-sm border border-gray-light focus:ring-primary focus:border-primary-500" placeholder="Anything we should know about the student..."></textarea>
            </div>
            <div class="markdown-body">
                {!! Str::markdown(<<<'LEGAL'
## Release
- I hold Ensembles harmless against all claims or demands arising from participation in class.
- I give Ensembles permission for medical treatment, in the event I cannot be reached in a timely manner.
- Ensembles is not responsible for lost or stolen items.  Please bring only what you need for class.
- All photographs and videos resulting from participation in Ensembles activities will become property of Ensembles to be used in promotion on website, social media and promotional materials. For confidentiality, no student names will be associated with photos.

## Guildelines and Expectations
- I understand and agree to abide by and follow these guidelines and expectations listed below. I (we) understand that failing to do so will constitute grounds for dismissal from the program without refund of tuition.
- I will be prompt for drop-off and pick up. Please do not arrive more than 15 minutes early as no one will be there to supervise. Adult need to come into the building to get children under the age of 12. They will not be released to the parking lot.
- Student will conduct themselves in a courteous, respectful manner toward the teachers and fellow students.  I (we) will avoid any action that would obstruct or disrupt the class, performance, waiting area, etc...
- Student will come to class prepared and ready to learn new skills.  The more they put into this opportunity, the more they will take away from it.

LEGAL) !!}
            </div>
            <div class="flex items-center">
                <input id="agree" name="agree" type="checkbox" value="agree" class="w-4 h-4 text-gray-dark bg-gray-mist border-gray-light rounded focus:ring-primary focus:ring-2 ">
                <label for="agree" class="ml-2 text-sm font-medium text-gray-dark ">I have read and agree to the terms</label>
            </div>
            <button id="continue" type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-md bg-primary sm:w-fit hover:bg-primary-dark focus:ring-4 focus:outline-none focus:ring-primary-light disabled:opacity-25">
                Continue to Payment
            </button>
        </form>
    </article>
</section>
<script>
    const age = document.querySelector('input[name="age"]');
    const birthdate = document.getElementById('birthdate');
    birthdate.addEventListener('change', function() {
        const birthdate = new Date(this.value);
        const refDay = new Date('{{ strtolower($course->start->format('Y-m-d')) }}');
        const diff = refDay - birthdate;
        const age = Math.floor(diff / 31557600000);
        document.querySelector('input[name="age"]').value = age;
    });
    const parseDate = /^(0?[1-9]|1[12])([ .\/-]?)(0?[1-9]|[12][0-9]|3[01])\2((?:19|20)?\d\d)$/;
    birthdate.addEventListener('blur', (evt) => {
        const parsed = parseDate.exec(evt.target.value);
        if (parsed) {
            const mm = ("0"+parsed[1]).slice(-2);
            const dd = ("0" + parsed[3]).slice(-2);
            let year = parseInt(parsed[4]);
            if (year < 100) {
                year += 1900;
                const thisYear = (new Date()).getFullYear();
                // assume two digit year is within past 100 years.
                if (thisYear - year >= 100) {
                    year += 100
                }
            }
            evt.target.value = `${mm}/${dd}/${year}`;
        }
    });
    const continueBtn = document.getElementById('continue');
    const agree = document.getElementById('agree');
    continueBtn.disabled = !agree.checked;
    agree.addEventListener('change', function() {
        if (this.checked) {
          continueBtn.disabled = false;
        } else {
          continueBtn.disabled = true;
        }
    });
</script>
@stop
