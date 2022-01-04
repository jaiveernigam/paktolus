<div class="container new-form">
    <div class="row">
        <div class="col-md-12">
            <form id="form" action="" method="GET">
                <input type="hidden" name="auth_token" value="zcXbR1NoE0zoozyuqAa75s5gBATbeiUsbkGhvb5toGiNWUdDjIUkAU5XgDwCRTet">
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="FirstName">First Name <span style="color:red;">*</span></label>
                        <input name="first_name" type="text" class="form-control" id="inputFname" placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="MiddleName">Middle Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="inputMname" placeholder="Middle Name">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="LastName">Last Name <span style="color:red;">*</span></label>
                        <input name="last_name" type="text" class="form-control" id="inputLname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="inputAddress">Street Address <span style="color:red;">*</span></label>
                        <input name="street" type="text" class="form-control" id="inputAddress" placeholder="Street Address" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputUnit">Unit # <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" id="inputUnit" placeholder="Unit" required>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">City <span style="color:red;">*</span></label>
                        <input name="city" type="text" class="form-control" id="inputCity" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State <span style="color:red;">*</span></label>
                        <select name="state" id="inputState" class="form-control" required>

                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputZip">Zip Code <span style="color:red;">*</span></label>
                        <input name="zip" type="text" class="form-control" id="inputZip" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputDob">Date of Birth <span style="color:red;">*</span></label>
                        <input type="date" id="inputDob" name="date_of_birth" class="form-control" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputMobile">Phone Number <span style="color:red;">*</span></label>
                        <input type="number" id="inputMobile" name="phone" class="form-control" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email Address <span style="color:red;">*</span></label>
                        <input name="email" type="text" class="form-control" id="staticEmail" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <div class="card">
                            <div class="icon-ing">
                                <img class="card-img-top" src="195492.png" alt="House">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">House</h5>
                                <p class="card-text">This may be a single-family home, townhouse or duplex you own and live in.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="195492.png" alt="Condo">
                            <div class="card-body">
                                <h5 class="card-title">Condo</h5>
                                <p class="card-text">This is likely a multi-family building or complex in which you own a unit.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="195492.png" alt="HO5">
                            <div class="card-body">
                                <h5 class="card-title">HO5</h5>
                                <p class="card-text">The HO5 is an open perils insurance policy for a single-family home or duplex.</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="submitData" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>





<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    Date.prototype.yyyymmdd = function() {
        var mm = this.getMonth() + 1; // getMonth() is zero-based
        var dd = this.getDate();

        return [
            (mm > 9 ? '' : '0') + mm,
            (dd > 9 ? '' : '0') + dd,
            this.getFullYear()
        ].join('');
    };


    const formatter = (value) => {
        return new Intl.NumberFormat('en-ID', {
                style: 'currency',
                currency: 'IDR'
            }).format(value)
            .replace(/[IDR]/gi, '')
            .replace(/(\.+\d{2})/, '')
            .trimLeft()
    }


    jQuery('#submitData').click(function(e) {
        const btn = document.getElementById('submitData');
        btn.textContent = 'please wait..';
        const formData = jQuery('#form').serializeArray();
        const modifiedData = formData.map(data => {
            let {
                name
            } = data;
            if (name == 'date_of_birth' && data.value) {
                const date = new Date(data.value);
                data.value = date.yyyymmdd();

            }
            return data;
        })

        e.preventDefault()
        jQuery.get("https://api.staging.myhippo.io/v1/herd/quote",
            modifiedData,
            function(data) {
                console.log(data)


                swal({
                    title: "Quote Premium is",
                    text: '$' + formatter(data.quote_premium),
                    icon: "success",
                });
            },
            'json' // I expect a JSON response
        );
    });





    const states = [{
            "name": "Alabama",
            "code": "AL"
        },
        {
            "name": "Alaska",
            "code": "AK"
        },
        {
            "name": "Arizona",
            "code": "AZ"
        },
        {
            "name": "Arkansas",
            "code": "AR"
        },
        {
            "name": "California",
            "code": "CA"
        },
        {
            "name": "Colorado",
            "code": "CO"
        },
        {
            "name": "Connecticut",
            "code": "CT"
        },
        {
            "name": "Delaware",
            "code": "DE"
        },
        {
            "name": "Florida",
            "code": "FL"
        },
        {
            "name": "Georgia",
            "code": "GA"
        },
        {
            "name": "Hawaii",
            "code": "HI"
        },
        {
            "name": "Idaho",
            "code": "ID"
        },
        {
            "name": "Illinois",
            "code": "IL"
        },
        {
            "name": "Indiana",
            "code": "IN"
        },
        {
            "name": "Iowa",
            "code": "IA"
        },
        {
            "name": "Kansas",
            "code": "KS"
        },
        {
            "name": "Kentucky",
            "code": "KY"
        },
        {
            "name": "Louisiana",
            "code": "LA"
        },
        {
            "name": "Maine",
            "code": "ME"
        },
        {
            "name": "Maryland",
            "code": "MD"
        },
        {
            "name": "Massachusetts",
            "code": "MA"
        },
        {
            "name": "Michigan",
            "code": "MI"
        },
        {
            "name": "Minnesota",
            "code": "MN"
        },
        {
            "name": "Mississippi",
            "code": "MS"
        },
        {
            "name": "Missouri",
            "code": "MO"
        },
        {
            "name": "Montana",
            "code": "MT"
        },
        {
            "name": "Nebraska",
            "code": "NE"
        },
        {
            "name": "Nevada",
            "code": "NV"
        },
        {
            "name": "New Hampshire",
            "code": "NH"
        },
        {
            "name": "New Jersey",
            "code": "NJ"
        },
        {
            "name": "New Mexico",
            "code": "NM"
        },
        {
            "name": "New York",
            "code": "NY"
        },
        {
            "name": "North Carolina",
            "code": "NC"
        },
        {
            "name": "North Dakota",
            "code": "ND"
        },
        {
            "name": "Ohio",
            "code": "OH"
        },
        {
            "name": "Oklahoma",
            "code": "OK"
        },
        {
            "name": "Oregon",
            "code": "OR"
        },
        {
            "name": "Pennsylvania",
            "code": "PA"
        },
        {
            "name": "Rhode Island",
            "code": "RI"
        },
        {
            "name": "South Carolina",
            "code": "SC"
        },
        {
            "name": "South Dakota",
            "code": "SD"
        },
        {
            "name": "Tennessee",
            "code": "TN"
        },
        {
            "name": "Texas",
            "code": "TX"
        },
        {
            "name": "Utah",
            "code": "UT"
        },
        {
            "name": "Vermont",
            "code": "VT"
        },
        {
            "name": "Virginia",
            "code": "VA"
        },
        {
            "name": "Washington",
            "code": "WA"
        },
        {
            "name": "West Virginia",
            "code": "WV"
        },
        {
            "name": "Wisconsin",
            "code": "WI"
        },
        {
            "name": "Wyoming",
            "code": "WY"
        }
    ];


    const stateField = document.getElementById('inputState');

    states.forEach(state => {
        const option = document.createElement('option');

        option.value = state.code;
        option.textContent = state.name;
        stateField.append(option);
    })
</script>