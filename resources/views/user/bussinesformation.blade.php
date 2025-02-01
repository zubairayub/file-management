<x-app-layout>
<div id="appdashboard">
    <div class="card shadow border-0 mb-7" id="eintabsection">
                        <div class="content">
                            <div class="py-4 px-3 px-md-4">
                                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                                    <div class="h3 mb-0">Application for LLC/C-Corp/S-Corp/Non-Profit Corporation</div>
                                </div>
                                <div class="row my-5">
                                    <div class="col-md-12">
                                        <div class="alert alert-warning d-block">
                                            <small class="d-block"><i class="bi bi-info-circle me-2 text-danger"
                                                    data-bs-toggle="tooltip" data-placement="bottom"
                                                    title="Before submitting your form, ensure that all the information provided is accurate and complete. Inaccurate or incomplete information may result in delays in processing your application or potential legal and financial repercussions for your business."></i>
                                                Read before start the application.</small>
                                            <small class="d-block"><i class="bi bi-info-circle me-2 text-danger"
                                                    data-bs-toggle="tooltip" data-placement="bottom"
                                                    title="Enter “N/A” (not applicable) in all sections of each line that do not apply to you. This ensures that your form is complete and helps avoid any processing delays due to incomplete information."></i>
                                                Enter “N/A” (not applicable) on all sections of each line that don't
                                                apply to you. </small>
                                        </div>
                                    </div>
                                </div>
                                <form id="llcForm" class="row g-3 formsubmission needs-validation" novalidate enctype="application/x-www-form-urlencoded">
                                    <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Details</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-3">
                                                        <label for="firstname" class="mid">First Name <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="firstname" class="form-control"
                                                            name="firstname" required placeholder="John">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="midname" class="mid">Middle Name</label>
                                                        <input type="text" id="midname" class="form-control"
                                                            name="midname" placeholder="Stam">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="lastname" class="mid">Last Name <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="lastname" class="form-control"
                                                            name="lastname" required placeholder="Doe">
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <label for="businessname" class="mid">Business Name <span
                                                                style="color:red">*</span>
                                                                <small>(Please enter the name of your business if you are applying for a new entity)</small>
                                                            </label>
                                                        <input type="text" id="businessname" class="form-control"
                                                            name="businessname" required
                                                            placeholder="Enter Business Name">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="phone" class="mid">Phone <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="phone" class="form-control" name="phone"
                                                            required placeholder="555-111-222">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="fax" class="mid">Fax</label>
                                                        <input type="text" id="fax" class="form-control" name="fax"
                                                            placeholder="555-111-222">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="email" class="mid">Email Address <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="email" class="form-control" name="email"
                                                            required placeholder="yourname@email.com">
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <label for="address" class="mid">Address <span style="color:red">*</span></label>
                                                       <input type="text" id="address" class="form-control"
                                                           name="address" required
                                                           placeholder="XX N Sheridan Avenue">
                                                   </div>
                                                    <div class="col-lg-3">
                                                         <label for="addresscity" class="mid">City <span style="color:red">*</span></label>
                                                        <input type="text" id="addresscity" class="form-control"
                                                            name="addresscity" required
                                                            placeholder="NY">
                                                    </div>
                                                    <div class="col-lg-2">
                                                         <label for="addressstate" class="mid">State <span style="color:red">*</span></label>
                                                            <select id="addressstate" class="form-control" name="addressstate" required="">
                                                                <option value="" disabled="" selected="">Select a state</option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IN">Indiana</option>
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
                                                    <div class="col-lg-2">
                                                        <label for="addresszipcode" class="mid">Zip Code <span style="color:red">*</span></label>
                                                       <input type="text" id="addresszipcode" class="form-control"
                                                           name="addresszipcode" required
                                                           placeholder="98765">
                                                   </div>
                                                   <div class="col-lg-2">
                                                    <label for="addresscounty" class="mid">County <span style="color:red">*</span></label>
                                                   <input type="text" id="addresscounty" class="form-control"
                                                       name="addresscounty" required
                                                       placeholder="Houston">
                                               </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-4">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Service Details
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-4">
                                                        <label for="levelservice" class="mid">Level of State Service
                                                            <span style="color:red">*</span></label>
                                                        <div class="radiobox">
                                                            <label>
                                                                <input type="radio" id="levelserviceStandard"
                                                                    name="levelservice" value="Standard"
                                                                    class="radio radio radioInput  form-check-input " required>
                                                                Standard</label>
                                                            <label>
                                                                <input type="radio" id="levelserviceExpedited"
                                                                    name="levelservice" value="Expedited"
                                                                    class="radio radio radioInput  form-check-input " required> Expedited
                                                                (Additional Fee of
                                                                $50.00)</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="eintaxid" class="mid">EIN Tax ID# ($49.00) <span
                                                                style="color:red">*</span></label>
                                                        <div class="radiobox">
                                                            <label>
                                                                <input type="radio" id="eintaxid" name="eintaxid"
                                                                    value="eintaxidYes" class="radio radioInput  form-check-input "
                                                                    required>
                                                                Yes</label>
                                                            <label>
                                                                <input type="radio" id="eintaxid" name="eintaxid"
                                                                    value="eintaxidNo" class="radio radioInput  form-check-input "
                                                                    required>
                                                                No</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="formacorporation" class="mid">You would like to form
                                                            (Select Entity) <span style="color:red">*</span></label>
                                                        <select id="formacorporation" class="form-control"
                                                            name="formacorporation" required>
                                                            <option value="">Select Entity Type</option>
                                                            <option value="LLC">LLC</option>
                                                            <option value="SCORP">S-Corp</option>
                                                            <option value="CCORP">C-Corp</option>
                                                            <option value="NonProfit">Non-for-Profit</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="stateof" class="mid">In the State of <span
                                                                style="color:red">*</span></label>
                                                        <select name="stateof" id="stateof" class="form-control"
                                                            required placeholder="State">
                                                            <option value="" disabled selected>Select a state</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="CA">California</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IN">Indiana</option>
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
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-4">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">New Entity Name
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-3">
                                                        <label for="companynamechoice1" class="mid"> 1st choice</label>
                                                        <input type="text" id="companynamechoice1" class="form-control"
                                                            name="companynamechoice1" placeholder="Choice 1">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="companynamechoice2" class="mid">2nd choice</label>
                                                        <input type="text" id="companynamechoice2" class="form-control"
                                                            name="companynamechoice2" placeholder="Choice 2">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="companynamechoice3" class="mid">3rd choice</label>
                                                        <input type="text" id="companynamechoice3" class="form-control"
                                                            name="companynamechoice3" placeholder="Choice 3">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="companynamechoice4" class="mid">4th choice</label>
                                                        <input type="text" id="companynamechoice4" class="form-control"
                                                            name="companynamechoice4" placeholder="Choice 4">
                                                    </div>

                                                    <div class="col-lg-3">
                                                        <label for="companynamechoice5" class="mid">5th choice</label>
                                                        <input type="text" id="companynamechoice5" class="form-control"
                                                            name="companynamechoice5" placeholder="Choice 5">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <small>The name ending: Incorporated, Inc., Corporation, Corp.,
                                                            Limited, Ltd., Limited Liability Company, LLC, Limited
                                                            Partnership, LP, LLP</small>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Stock Structure
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-lg-4">
                                                        <label for="qtyshares" class="mid">Qty of Shares <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="qtyshares" class="form-control"
                                                            name="qtyshares" placeholder="Qty of Shares" required>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="noparvalue" class="mid">No Par Value</label>
                                                        <input type="text" id="noparvalue" class="form-control"
                                                            name="noparvalue" placeholder="No Par Value">
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="parvalue" class="mid">Par Value</label>
                                                        <input type="text" id="parvalue" class="form-control"
                                                            name="parvalue" placeholder="Par Value">
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Description of
                                                    Business</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-lg-12">
                                                        <label for="briefdescription" class="mid">Brief Description of
                                                            Business Purpose <span style="color:red">*</span></label>
                                                        <input type="text" id="briefdescription" class="form-control"
                                                            name="briefdescription"
                                                            placeholder="Enter Brief Description" required>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <label for="principalbusiness" class="mid">Principal Business
                                                            Address <span style="color:red">*</span></label>
                                                        <input type="text" id="principalbusiness" class="form-control"
                                                            name="principalbusiness"
                                                            placeholder="Enter Principal Business Address" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="businesscity" class="mid">City <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="businesscity" class="form-control"
                                                            name="businesscity" placeholder="Enter City" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="businesscounty" class="mid">State <span
                                                                style="color:red">*</span></label>
                                                        <select id="businesscounty" class="form-control"
                                                            name="businesscounty" required>
                                                            <option value="" disabled selected>Select a state</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="CA">California</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IN">Indiana</option>
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
                                                    <div class="col-lg-3">
                                                        <label for="busineszip" class="mid">Zip Code <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="busineszip" class="form-control"
                                                            name="busineszip" placeholder="Enter Zip Code" required>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="bcounty" class="mid">County <span
                                                                style="color:red">*</span></label>
                                                        <input type="text" id="bcounty" class="form-control"
                                                            name="bcounty" placeholder="Enter County" required>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Registered
                                                    Agent's Name & Address</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-lg-12">
                                                        <label for="regagent" class="mid">Select Registered
                                                            Agent's</label>
                                                        <div class="radiobox">
                                                            <label>
                                                                <input type="radio" id="regagentYes" name="regagent"
                                                                    value="PromptfilingsActAgent" class="radio  ">
                                                                Promptfilings to act as Resident Agent (Additional fees
                                                                of $129.00/year)</label><br>
                                                            <label>
                                                                <input type="radio" id="regagentNo" name="regagent"
                                                                    value="OwnActAgent" class="radio  "> No I
                                                                will use my own Resident Agent details</label>
                                                        </div>
                                                    </div>
                                                    <div class="row agentdetils" style="display: none;">
                                                        <div class="col-lg-3">
                                                            <label for="agenttitle" class="mid">Agent Name
                                                            </label>
                                                            <input type="text" id="agenttitle" class="form-control"
                                                                name="agenttitle" placeholder="Enter Agent Name/Title">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="agentaddress" class="mid">Address </label>
                                                            <input type="text" id="agentaddress" class="form-control"
                                                                name="agentaddress" placeholder="Enter Agent Address">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="agentcity" class="mid">City </label>
                                                            <input type="text" id="agentcity" class="form-control"
                                                                name="agentcity" placeholder="Enter Agent City">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="agentstate" class="mid">State </label>
                                                            <select id="agentstate" class="form-control"
                                                                name="agentstate">
                                                                <option value="" disabled selected>Select a state
                                                                </option>
                                                                <option value="AL">Alabama</option>
                                                                <option value="AK">Alaska</option>
                                                                <option value="AZ">Arizona</option>
                                                                <option value="AR">Arkansas</option>
                                                                <option value="CA">California</option>
                                                                <option value="CO">Colorado</option>
                                                                <option value="CT">Connecticut</option>
                                                                <option value="DE">Delaware</option>
                                                                <option value="FL">Florida</option>
                                                                <option value="GA">Georgia</option>
                                                                <option value="HI">Hawaii</option>
                                                                <option value="ID">Idaho</option>
                                                                <option value="IL">Illinois</option>
                                                                <option value="IN">Indiana</option>
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
                                                        <div class="col-lg-3">
                                                            <label for="agentzip" class="mid">Zip Code </label>
                                                            <input type="text" id="agentzip" class="form-control"
                                                                name="agentzip" placeholder="Enter Agent Zip Code">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="agentcounty" class="mid">County </label>
                                                            <input type="text" id="agentcounty" class="form-control"
                                                                name="agentcounty" placeholder="Enter agent's county">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Director /
                                                    Member / Manager / Officer / Shareholder Information (You must have
                                                    a minimum of one)</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-12 my-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h4>1).</h4>
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Name</p>
                                                                <input type="text" id="shareholdername1"
                                                                    class="form-control" name="shareholdername1"
                                                                    placeholder="Enter Name">
                                                            </div>
                                                            <div class="col-4">
                                                                <p>EIN/ITIN/SS#</p>
                                                                <input type="text" id="shareholderss1"
                                                                    class="form-control" name="shareholderss1"
                                                                    placeholder="Enter EIN/ITIN/SS#">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Title</p>
                                                                <input type="text" id="shareholdertitle1"
                                                                    class="form-control" name="shareholdertitle1"
                                                                    placeholder="Enter Title">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Address</p>
                                                                <input type="text" id="shareholderaddress1"
                                                                    class="form-control" name="shareholderaddress1"
                                                                    placeholder="Enter Address">
                                                            </div>
                                                    <div class="col-3">
                                                        <p>City</p>
                                                       <input type="text" id="shareholder1addresscity" class="form-control"
                                                           name="shareholder1addresscity" required
                                                           placeholder="NY">
                                                   </div>
                                                   <div class="col-2">
                                                        <p>State</p>
                                                           <select id="shareholder1addressstate" class="form-control" name="shareholder1addressstate" required="">
                                                               <option value="" disabled="" selected="">Select a state</option>
                                                               <option value="AL">Alabama</option>
                                                               <option value="AK">Alaska</option>
                                                               <option value="AZ">Arizona</option>
                                                               <option value="AR">Arkansas</option>
                                                               <option value="CA">California</option>
                                                               <option value="CO">Colorado</option>
                                                               <option value="CT">Connecticut</option>
                                                               <option value="DE">Delaware</option>
                                                               <option value="FL">Florida</option>
                                                               <option value="GA">Georgia</option>
                                                               <option value="HI">Hawaii</option>
                                                               <option value="ID">Idaho</option>
                                                               <option value="IL">Illinois</option>
                                                               <option value="IN">Indiana</option>
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
                                                   <div class="col-2">
                                                       <p>Zip Code </p>
                                                      <input type="text" id="shareholder1addresszipcode" class="form-control"
                                                          name="shareholder1addresszipcode" required
                                                          placeholder="98765">
                                                  </div>
                                                  <div class="col-2">
                                                   <p>County</p>
                                                  <input type="text" id="shareholder1addresscounty" class="form-control"
                                                      name="shareholder1addresscounty" required
                                                      placeholder="Houston">
                                                        </div>
                                                    </div>
                                                    </div>
                                                    <div class="col-lg-12 my-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h4>2).</h4>
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Name</p>
                                                                <input type="text" id="shareholdername2"
                                                                    class="form-control" name="shareholdername2"
                                                                    placeholder="Enter Name">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>EIN/ITIN/SS#</p>
                                                                <input type="text" id="shareholderss2"
                                                                    class="form-control" name="shareholderss2"
                                                                    placeholder="Enter EIN/ITIN/SS#">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Title</p>
                                                                <input type="text" id="shareholdertitle2"
                                                                    class="form-control" name="shareholdertitle2"
                                                                    placeholder="Enter Title">
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p>Address</p>
                                                                <input type="text" id="shareholderaddress2"
                                                                    class="form-control" name="shareholderaddress2"
                                                                    placeholder="Enter Address">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>City</p>
                                                               <input type="text" id="shareholder2addresscity" class="form-control"
                                                                   name="shareholder2addresscity" required
                                                                   placeholder="NY">
                                                           </div>
                                                           <div class="col-lg-2">
                                                                <p>State</p>
                                                                   <select id="shareholder2addressstate" class="form-control" name="shareholder2addressstate" required="">
                                                                       <option value="" disabled="" selected="">Select a state</option>
                                                                       <option value="AL">Alabama</option>
                                                                       <option value="AK">Alaska</option>
                                                                       <option value="AZ">Arizona</option>
                                                                       <option value="AR">Arkansas</option>
                                                                       <option value="CA">California</option>
                                                                       <option value="CO">Colorado</option>
                                                                       <option value="CT">Connecticut</option>
                                                                       <option value="DE">Delaware</option>
                                                                       <option value="FL">Florida</option>
                                                                       <option value="GA">Georgia</option>
                                                                       <option value="HI">Hawaii</option>
                                                                       <option value="ID">Idaho</option>
                                                                       <option value="IL">Illinois</option>
                                                                       <option value="IN">Indiana</option>
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
                                                           <div class="col-lg-2">
                                                               <p>Zip Code</p>
                                                              <input type="text" id="shareholder2addresszipcode" class="form-control"
                                                                  name="shareholder2addresszipcode" required
                                                                  placeholder="98765">
                                                          </div>
                                                          <div class="col-lg-2">
                                                           <p>County</p>
                                                          <input type="text" id="shareholder2addresscounty" class="form-control"
                                                              name="shareholder2addresscounty" required
                                                              placeholder="Houston">
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 my-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h4>3).</h4>
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Name</p>
                                                                <input type="text" id="shareholdername3"
                                                                    class="form-control" name="shareholdername3"
                                                                    placeholder="Enter Name">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>EIN/ITIN/SS#</p>
                                                                <input type="text" id="shareholderss3"
                                                                    class="form-control" name="shareholderss3"
                                                                    placeholder="Enter EIN/ITIN/SS#">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Title</p>
                                                                <input type="text" id="shareholdertitle3"
                                                                    class="form-control" name="shareholdertitle3"
                                                                    placeholder="Enter Title">
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p>Address</p>
                                                                <input type="text" id="shareholderaddress3"
                                                                    class="form-control" name="shareholderaddress3"
                                                                    placeholder="Enter Address">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>City</p>
                                                               <input type="text" id="shareholder3addresscity" class="form-control"
                                                                   name="shareholder3addresscity" required
                                                                   placeholder="NY">
                                                           </div>
                                                           <div class="col-lg-2">
                                                                <p>State</p>
                                                                   <select id="shareholder3addressstate" class="form-control" name="shareholder3addressstate" required="">
                                                                       <option value="" disabled="" selected="">Select a state</option>
                                                                       <option value="AL">Alabama</option>
                                                                       <option value="AK">Alaska</option>
                                                                       <option value="AZ">Arizona</option>
                                                                       <option value="AR">Arkansas</option>
                                                                       <option value="CA">California</option>
                                                                       <option value="CO">Colorado</option>
                                                                       <option value="CT">Connecticut</option>
                                                                       <option value="DE">Delaware</option>
                                                                       <option value="FL">Florida</option>
                                                                       <option value="GA">Georgia</option>
                                                                       <option value="HI">Hawaii</option>
                                                                       <option value="ID">Idaho</option>
                                                                       <option value="IL">Illinois</option>
                                                                       <option value="IN">Indiana</option>
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
                                                           <div class="col-lg-2">
                                                               <p>Zip Code</p>
                                                              <input type="text" id="shareholder3addresszipcode" class="form-control"
                                                                  name="shareholder3addresszipcode" required
                                                                  placeholder="98765">
                                                          </div>
                                                          <div class="col-lg-2">
                                                           <p>County</p>
                                                          <input type="text" id="shareholder3addresscounty" class="form-control"
                                                              name="shareholder3addresscounty" required
                                                              placeholder="Houston">
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-12 my-5">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <h4>4).</h4>
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Name</p>
                                                                <input type="text" id="shareholdername4"
                                                                    class="form-control" name="shareholdername4"
                                                                    placeholder="Enter Name">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>EIN/ITIN/SS#</p>
                                                                <input type="text" id="shareholderss4"
                                                                    class="form-control" name="shareholderss4"
                                                                    placeholder="Enter EIN/ITIN/SS#">
                                                            </div>
                                                            <div class="col-3">
                                                                <p>Title</p>
                                                                <input type="text" id="shareholdertitle4"
                                                                    class="form-control" name="shareholdertitle4"
                                                                    placeholder="Enter Title">
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <p>Address</p>
                                                                <input type="text" id="shareholderaddress4"
                                                                    class="form-control" name="shareholderaddress4"
                                                                    placeholder="Enter Address">
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <p>City</p>
                                                               <input type="text" id="shareholder4addresscity" class="form-control"
                                                                   name="shareholder4addresscity" required
                                                                   placeholder="NY">
                                                           </div>
                                                           <div class="col-lg-2">
                                                                <p>State</p>
                                                                   <select id="shareholder4addressstate" class="form-control" name="shareholder4addressstate" required="">
                                                                       <option value="" disabled="" selected="">Select a state</option>
                                                                       <option value="AL">Alabama</option>
                                                                       <option value="AK">Alaska</option>
                                                                       <option value="AZ">Arizona</option>
                                                                       <option value="AR">Arkansas</option>
                                                                       <option value="CA">California</option>
                                                                       <option value="CO">Colorado</option>
                                                                       <option value="CT">Connecticut</option>
                                                                       <option value="DE">Delaware</option>
                                                                       <option value="FL">Florida</option>
                                                                       <option value="GA">Georgia</option>
                                                                       <option value="HI">Hawaii</option>
                                                                       <option value="ID">Idaho</option>
                                                                       <option value="IL">Illinois</option>
                                                                       <option value="IN">Indiana</option>
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
                                                           <div class="col-lg-2">
                                                               <p>Zip Code</p>
                                                              <input type="text" id="shareholder4addresszipcode" class="form-control"
                                                                  name="shareholder4addresszipcode" required
                                                                  placeholder="98765">
                                                          </div>
                                                          <div class="col-lg-2">
                                                           <p>County</p>
                                                          <input type="text" id="shareholder4addresscounty" class="form-control"
                                                              name="shareholder4addresscounty" required
                                                              placeholder="Houston">
                                                                </div>
                                                        </div> 
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                         <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Type of
                                                    Entity?</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-2">
                                                        <label class="form-check-label"><input type="radio" id="isit"
                                                                name="isitllc" value="LLC" class="radio radioInput  form-check-input ">
                                                            LLC</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="form-check-label"><input type="radio" id="isit"
                                                                name="isitllc" value="C-CORP"
                                                                class="radio radioInput  form-check-input "> C-CORP</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <label class="form-check-label"><input type="radio" id="isit"
                                                                name="isitllc" value="S-Corp"
                                                                class="radio radioInput  form-check-input "> S-Corp - An
                                                            additional fee ($249.00) will apply to complete S CORP
                                                            Election (Federal & State).</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5 thisisllc" style="display: none;">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">If this is a
                                                    LLC, is it:</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-3">
                                                        <label class="form-check-label"><input type="radio"
                                                                id="ifthisllc" name="ifthisllc" value="Member Managed"
                                                                class="radio  ">
                                                            Member Managed</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="form-check-label"><input type="radio"
                                                                id="ifthisllc" name="ifthisllc" value="Manager Managed"
                                                                class="radio  ">
                                                            Manager Managed</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="form-check-label"><input type="radio"
                                                                id="ifthisllc" name="ifthisllc" value="Single Member"
                                                                class="radio  ">
                                                            Single Member</label>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label class="form-check-label"><input type="radio"
                                                                id="ifthisllc" name="ifthisllc" value="Multi Member"
                                                                class="radio  ">
                                                            Multi Member</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Corporate/LLC
                                                    Kit (Starting from $69.00)</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-1">
                                                        <label class="form-check-label"><input type="radio" id="llckit"
                                                                name="llckit" value="LLCkit_Yes"
                                                                class="radio radioInput  form-check-input " required>
                                                            Yes</label>
                                                    </div>
                                                    <div class="col-lg-1">
                                                        <label class="form-check-label"><input type="radio" id="llckit"
                                                                name="llckit" value="LLCkit_No"
                                                                class="radio radioInput  form-check-input " required>
                                                            No</label>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Additional
                                                    Services</h5>
                                            </div>
                                            <div class="card-body">
                                            <div class="media-body row" id="ordersummary">
                                                    <div class="col-lg-2" style="display: none;">
                                                        <label class="form-check-label"><input type="checkbox"
                                                                id="plaincopy" name="plaincopy" class="radio  ">
                                                            Plain copy ($5.00)</label>
                                                    </div>
                                                    <div class="col-lg-5">
                                                        <label class="form-check-label"><input type="checkbox"
                                                                id="certifiedcopy" name="certifiedcopy" class="radio  ">
                                                            Certified Copy ($10.00)</label>
                                                    </div>
                                                    <div class="col-lg-3" style="display: none;">
                                                        <label class="form-check-label"><input type="checkbox"
                                                                id="certificateexistence" name="certificateexistence"
                                                                class="radio  ">
                                                            Certificate of existence ($25.00)</label>
                                                    </div>
                                                    <div class="col-lg-12 pt-5 pb-5">
                                        <div class="alert alert-primary mt-5 d-none">
                                                            <h4>You'll Pay: <span id="totalpricing"
                                                                    name="totalpricing"></span></h4>
                                                            <div class="d-none">
                                                              <input type="text" id="service" name="service" value="Business Formation" readonly>
                                                              <input type="text" id="authpricing" name="authpricing"  readonly></div>
                                                        </div>
                                                        <table cellpadding="5" cellspacing="0" width="100%" class="border mt-5 table pricingtable">
                                                        <thead class="thead-dark">
                                                        <tr>
                                                                <th>Service:</th>
                                                                <th><span id="pfservicefee">Fee</span></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">PromptFiling Services: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span id="pfservicefee">$149.00</span></p>
                                                                </td>
                                                            </tr>
  
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">State Filing: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="statefeeprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">Expedited Services: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="expeditedprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">EIN Tax ID Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="eintaxidprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">PF Resident Agent Fee (per year):
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="pfresidentfee">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">S CORP Election Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="scorpelectionprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">Corporate/LLC KIT Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span id="llckitprice">$0.00</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">Plain Copy Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="plaincopyprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">Certified Copy Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="certifiedprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">Certificate of Existence Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="certificateexistenceprice">$0.00</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
  
                                                            <tr>
                                                                <td>
                                                                    <p class="mb-3">Pay with Credit/Debit Card (a non-refundable portal processing fee applies)
  </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="certificateexistenceprice">3.5% plus 10c</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
  
                                                            <tr>
                                                                <th>
                                                                    <h2 class="mb-3">You will Pay: </h2>
                                                                </th>
                                                                <th>
                                                                    <h2 class="mb-3"><span
                                                                            id="totalpricing2"></span></h2>
                                                                </th>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                        <div class="col-12"><small class="mt-5 text-left d-block">Important Note: If any incorrect information is provided during the application process, you will need to restart and resubmit the entire application. It is essential to review all details carefully before submission to avoid any delays or complications.</small></div>
                                                        <div class="col-lg-12 d-flex align-items-center">
                                                                <input type="checkbox" id="terms" name="terms"
                                                                    class="form-check-input me-2 " required="">
                                                                <label for="terms">I have read the <a
                                                                        href="https://promptfilings.com/terms-of-service/"
                                                                        target="_blank">terms of
                                                                        services</a> and <a
                                                                        href="https://promptfilings.com/privacy-policy/"
                                                                        target="_blank">privacy
                                                                        policy</a></label>
                                                            </div> 
                                                    <div class="col-lg-12 mt-5 mb-5">
                                                          <button type="button" class="btn btn-primary" id="reviewapplicationn">Review Your Application</button>  
                                                                <button type="submit" class="btn btn-success" 
                                                                    data-package-id="9" 
                                                                    data-package-name="Business Formation"
                                                                    data-package-price="" 
                                                                    id="llcformvalidate">Pay Now to Submit
                                                                    Application</button>
                                                            </div>
                                                            <div class="my-2 col-md-12 p-0"><img
                                                                    src="https://promptfilings.com/wp-content/themes/astra/assets/authnet/authorizemerchant.jpg"
                                                                    alt="Authorize.net Merchant">
                                                            </div>
                                              
                                    </div>
                                    </div></div></div>
                                    <div class="col-md-12 mt-3 p-5"><small style="font-size:13px">Disclaimer: Please note that while we aim to
                                            offer accurate information, this sample application for forming a Limited
                                            Liability Company (LLC) is intended for illustrative purposes only and
                                            should not be taken as legal or financial advice. The steps and requirements
                                            for establishing an LLC may vary depending on your location and individual
                                            circumstances. We recommend consulting with a qualified professional or
                                            referring to the official guidelines provided by the relevant state or legal authorities for accurate and personalized assistance with your LLC formation process.</small></div>
                                   </form>         
                             </div>
                        </div>
                     <div class="formpreview column col-12 d-none">
                        <h4>Pleaese Review Your Business Entity Formation Application</h4>
                        <iframe class="pdf-preview" id="pdfPreviewllc"
                            src="/img/bpf.pdf" type="application/pdf" width="100%"
                            height="600">
                        </iframe>
                    </div>
                </div>

                <div id="reviewModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Review Application Details</h2>
    <div id="modalContent"></div> <!-- Form data will be injected here -->
    <button id="confirmBtn" class="btn btn-primary m-4 ">Proceed to submit</button>
  </div>
</div>
  <div class="modal fade formarea" id="upgradeModal" tabindex="-1" aria-labelledby="upgradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex align-items-start justify-content-start">

            <div class="col-md-5 cardside">
            <h4  class="payamount" id="amount2" name="amount2"></h4>
            <p><small>3.5% plus 10c<br>Pay with Credit/Debit Card (a non-refundable portal processing fee applies)</small></p>
            <div class="d-table bg-white p-3 text-center secureimg">
                    <img src="https://promptfilings.com/wp-content/uploads/2024/04/secure.png" width="80%" alt="secure">
                    </div>
                    </div>
                <div class="formareacontent col-md-7">
                    <form action="{{ route('payment.create') }}" method="POST" class="d-flex align-items-center justify-content-between flex-wrap">  
                    <div class="packgename" id="packageNameDisplay">Service: </div>
                    @csrf
                    <!-- Hidden Field for Package ID -->
                    <input type="hidden" id="package_id" name="package_id" value="9">
                    <input type="hidden" id="package_name" name="package_name" value="Business Formation">
                    <input type="hidden" id="package_type" name="package_type" value="one-time">
                    <div class="mb-3 col-md-12">
                        <label for="card_name" class="form-label">Card Holder Name</label>
                        <input type="text" class="form-control" id="card_name" name="card_name" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="card_number" class="form-label">Card Number</label>
                        <input type="text" class="form-control" id="card_number" name="card_number" required maxlength="16">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="expiry_date" class="form-label">Expiry Date</label>
                        <input type="text" class="form-control" id="expiry_date" name="expiry_date" required placeholder="MM/YY">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="card_code" class="form-label">Card Code (CVV)</label>
                        <input type="text" class="form-control" id="card_code" name="card_code" required maxlength="3">
                    </div>
                    <hr>
                    <div class="mb-3 col-md-12">
                        <label for="card_address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="card_address" name="card_address" required>
                    </div>
                    <div class="mb-3 col-md-12">
                        <label for="card_city" class="form-label">City</label>
                        <input type="text" class="form-control" id="card_city" name="card_city" required>
                    </div>
                                                                   </fieldset>

                       <!-- Billing Information -->
                       <fieldset class="border p-3 mb-4">
                        <legend class="text-primary fw-bold px-2">Billing Information</legend>

                        <div class="mb-3">
                            <label for="billing_address" class="form-label">Billing Address</label>
                            <input type="text" class="form-control" id="billing_address" name="billing_address" placeholder="123 Main Street" required>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="billing_city" class="form-label">City</label>
                                <input type="text" class="form-control" id="billing_city" name="billing_city" placeholder="City" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="billing_zip" class="form-label">ZIP/Postal Code</label>
                                <input type="text" class="form-control" id="billing_zip" name="billing_zip" placeholder="ZIP Code" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="billing_country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="billing_country" name="billing_country" placeholder="Country" required>
                        </div>
                    </fieldset>

                    <div class="mb-3 col-md-6">
                        <label for="card_state" class="form-label">State</label>
                        <input type="text" class="form-control" id="card_state" name="card_state" required>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="card_zipcode" class="form-label">Zipcode</label>
                        <input type="text" class="form-control" id="card_zipcode" name="card_zipcode" required>
                    </div>

                    <div class="mb-3" style="display:none">
                        <label for="amount" class="form-label">Amount</label>
                        <!-- Set the amount field to be readonly and set the value dynamically -->
                        <input type="number" class="form-control" value='987' id="amount" name="amount" required readonly>
                    </div>

                    <div class="col-md-12">
                <button type="submit" class="btn btn-primary w-100">Pay Now!</button>
                </div>
                
                </div> 
                </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://promptfilings.com/wp-content/themes/astra/assets/js/pdf-lib.min.js"></script>
<script src="https://promptfilings.com/wp-content/themes/astra/assets/js/llctoggle.js"></script> 
 <script defer>var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)});</script>		
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script defer>
const fees = {
    LLC: {
        AL: 183, AK: 250, AZ: 50, AR: 45, CA: 70, CO: 50, CT: 185, DE: 90, FL: 125, GA: 100,
        HI: 51, ID: 100, IL: 150, IN: 91, IA: 50, KS: 165, KY: 90, LA: 105, ME: 175, MD: 125,
        MA: 520, MI: 60, MN: 155, MS: 52, MO: 52, MT: 70, NE: 109, NV: 75, NH: 100, NJ: 130,
        NM: 50, NY: 200, NC: 127, ND: 135, OH: 99, OK: 104, OR: 100, PA: 125, RI: 156, SC: 110,
        SD: 150, TN: 309, TX: 300, UT: 76, VT: 125, VA: 103, WA: 180, WV: 100, WI: 130, WY: 102
    },
    SCORP: {
        AL: 183, AK: 250, AZ: 60, AR: 45, CA: 115, CO: 50, CT: 315, DE: 89, FL: 70, GA: 100,
        HI: 51, ID: 100, IL: 180, IN: 91, IA: 50, KS: 90, KY: 100, LA: 170, ME: 145, MD: 145,
        MA: 290, MI: 50, MN: 155, MS: 52, MO: 60, MT: 70, NE: 67, NV: 75, NH: 100, NJ: 130,
        NM: 100, NY: 125, NC: 127, ND: 100, OH: 99, OK: 50, OR: 100, PA: 125, RI: 238, SC: 235,
        SD: 150, TN: 105, TX: 300, UT: 76, VT: 125, VA: 77, WA: 180, WV: 100, WI: 100, WY: 102
    },
    CCORP: {
        AL: 183, AK: 250, AZ: 60, AR: 45, CA: 115, CO: 50, CT: 315, DE: 89, FL: 70, GA: 100,
        HI: 51, ID: 100, IL: 180, IN: 91, IA: 50, KS: 90, KY: 100, LA: 170, ME: 145, MD: 145,
        MA: 290, MI: 50, MN: 155, MS: 52, MO: 60, MT: 70, NE: 67, NV: 75, NH: 100, NJ: 130,
        NM: 100, NY: 125, NC: 127, ND: 100, OH: 99, OK: 50, OR: 100, PA: 125, RI: 238, SC: 235,
        SD: 150, TN: 105, TX: 300, UT: 76, VT: 125, VA: 77, WA: 180, WV: 100, WI: 100, WY: 102
    },
    NonProfit: {
        AL: 183, AK: 50, AZ: 40, AR: 50, CA: 45, CO: 50, CT: 165, DE: 89, FL: 70, GA: 100,
        HI: 26, ID: 30, IL: 55, IN: 30, IA: 20, KS: 20, KY: 58, LA: 165, ME: 40, MD: 195,
        MA: 40, MI: 20, MN: 90, MS: 52, MO: 27, MT: 20, NE: 22, NV: 50, NH: 25, NJ: 75,
        NM: 25, NY: 75, NC: 62, ND: 40, OH: 99, OK: 25, OR: 50, PA: 125, RI: 37.5, SC: 25,
        SD: 30, TN: 100, TX: 25, UT: 36, VT: 125, VA: 75, WA: 30, WV: 25, WI: 35, WY: 25
    }
};

// Function to update the total pricing
function updateTotalPricing() {
    let total = 0;

    // Get the value from each relevant price element and add it to the total
    const prices = [
        'expeditedprice',
        'eintaxidprice',
        'pfresidentfee',
        'scorpelectionprice',
        'llckitprice',
        'plaincopyprice',
        'certifiedprice',
        'certificateexistenceprice',
        'statefeeprice'
    ];

    prices.forEach(priceId => {
        const priceElement = document.getElementById(priceId);
        const priceValue = parseFloat(priceElement.innerHTML.replace('$', '')) || 0;
        total += priceValue;
    });
        const PFserviceAmount = 49.00;
        total += PFserviceAmount;
        //total = 1.50;


    // Update the total pricing element
    document.getElementById('totalpricing').innerHTML = `$${total.toFixed(2)}`;
    document.getElementById('authpricing').value = total.toFixed(2);
    document.getElementById('totalpricing2').innerHTML = `$${total.toFixed(2)}`;

}

// Function to calculate the state fee based on selected entity type and state
function calculatePrice() {
    const entity = document.getElementById('formacorporation').value;
    const state = document.getElementById('stateof').value;
    
    if (entity && state) {
        const price = fees[entity][state];
        document.getElementById('statefeeprice').textContent = `$${price.toFixed(2)}`;
    } else {
        document.getElementById('statefeeprice').textContent = "$0.00";
    }
    updateTotalPricing(); // Update total price after calculating the state fee
}

function showOrderSummary() {
    const summaryBox = document.querySelector('.ordersummarybox');
    if (summaryBox) {
        summaryBox.style.display = 'block';
    }
}

document.getElementById('formacorporation').addEventListener('change', function() {
    calculatePrice(); // Call the function to calculate the price
 });
document.getElementById('stateof').addEventListener('change', function() {
    calculatePrice(); // Call the function to calculate the price
    showOrderSummary(); // Call the function to show the order summary
});


// Existing event listeners for radio inputs and checkboxes...
document.querySelectorAll('input[name="levelservice"]').forEach((radio) => {
    radio.addEventListener('change', function() {
        const expeditedPriceElement = document.getElementById('expeditedprice');
        if (this.value === 'Expedited') {
            expeditedPriceElement.innerHTML = '$50.00';
        } else {
            expeditedPriceElement.innerHTML = '$0.00';
        }
        updateTotalPricing();
    });
});

document.querySelectorAll('input[name="eintaxid"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
        const eintaxidpriceElement = document.getElementById('eintaxidprice');
        if (this.value === 'eintaxidYes') {
            eintaxidpriceElement.innerHTML = '$49.00';
        } else {
            eintaxidpriceElement.innerHTML = '$0.00';
        }
        updateTotalPricing();
    });
});

const regAgentYes = document.getElementById('regagentYes');
const regAgentNo = document.getElementById('regagentNo');
const pfresidentfeepriceElement = document.getElementById('pfresidentfee');

regAgentYes.addEventListener('change', pfresidentfeeupdatePrice);
regAgentNo.addEventListener('change', pfresidentfeeupdatePrice);

function pfresidentfeeupdatePrice() {
    let basePrice = 0.00;
    if (regAgentYes.checked) {
        pfresidentfeepriceElement.innerHTML = `$${(basePrice + 129).toFixed(2)}`;
    } else {
        pfresidentfeepriceElement.innerHTML = `$${basePrice.toFixed(2)}`;
    }
    updateTotalPricing();
}

document.querySelectorAll('input[name="isitllc"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
        const priceElement = document.getElementById("scorpelectionprice");
        if (this.value === "S-Corp" && this.checked) {
            priceElement.innerHTML = "$249.00";
        } else {
            priceElement.innerHTML = "$0.00";
        }
        updateTotalPricing();
    });
});

document.querySelectorAll('input[name="llckit"]').forEach(function (radio) {
    radio.addEventListener('change', function () {
        const priceElement = document.getElementById('llckitprice');
        if (this.value === 'LLCkit_Yes') {
            priceElement.innerHTML = '$69.00';
        } else {
            priceElement.innerHTML = '$0.00';
        }
        updateTotalPricing();
    });
});

document.getElementById("plaincopy").addEventListener("change", function() {
    const priceElement = document.getElementById("plaincopyprice");
    if (this.checked) {
        priceElement.innerHTML = "$5.00";
    } else {
        priceElement.innerHTML = "$0.00";
    }
    updateTotalPricing();
});

document.getElementById("certifiedcopy").addEventListener("change", function() {
    const priceElement = document.getElementById("certifiedprice");
    if (this.checked) {
        priceElement.innerHTML = "$10.00";
    } else {
        priceElement.innerHTML = "$0.00";
    }
    updateTotalPricing();
});

document.getElementById("certificateexistence").addEventListener("change", function() {
    const priceElement = document.getElementById("certificateexistenceprice");
    if (this.checked) {
        priceElement.innerHTML = "$25.00";
    } else {
        priceElement.innerHTML = "$0.00";
    }
    updateTotalPricing();
});

// Initial call to set the total on page load
updateTotalPricing();

function handleVisibility(entries) {
    entries.forEach(entry => {
        const alertElement = entry.target.querySelector('.alert');
        if (alertElement) {
            if (entry.isIntersecting) {
                // Add the class when .ordersummarybox is in the viewport
                alertElement.classList.add('normalbox');
            } else {
                // Remove the class when .ordersummarybox is out of the viewport
                alertElement.classList.remove('normalbox');
            }
        }
    });
}

// Create an Intersection Observer instance
const observer = new IntersectionObserver(handleVisibility, {
    threshold: 0.1 // Adjust this value as needed
});

// Start observing the .ordersummarybox element
const summaryBox = document.querySelector('.ordersummarybox');
if (summaryBox) {
    observer.observe(summaryBox);
}

// Function to change the display property of .ordersummarybox
function showOrderSummary() {
    const summaryBox = document.querySelector('.ordersummarybox');
    if (summaryBox) {
        summaryBox.style.display = 'block';
    }
}
</script>
<script defer>
// Step 1: Validate Form
document.getElementById("llcformvalidate").addEventListener("click", function(event) {
    var formein = document.getElementById("llcForm");
    if (formein.checkValidity() === false) {
        event.preventDefault();
        event.stopPropagation();
        alert('Please make sure to fill in all required fields.');
        formein.classList.add('was-validated');
        // Handle radio button validation
        var radios = formein.querySelectorAll('input[type="radio"]');
        var radioValid = false;
        radios.forEach(function (radio) {
            if (radio.checked) {
                radioValid = true;
            }
        });
    } else {
        // Validation passed, show the modal programmatically
      const upgradeModal = new bootstrap.Modal(document.getElementById('upgradeModal'));
        // Step 2: Validation Confirmed, Update PDF
        llcupdatePdf();
        upgradeModal.show();
    }
});

// Step 3: Process Payment
document.querySelector(".formsubmission").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this);
 
    // Start processing the PDF generation
    var blobUrl = document.getElementById('pdfPreviewllc').getAttribute('src');

    // Fetch PDF content as Blob
    fetch(blobUrl)
        .then(function (response) {
            return response.blob();
        })
        .catch(function (error) {
            console.error('Error fetching PDF content:', error);
        })
        .finally(function () {
            // You can add code here to hide the loading screen if required
//            if (loadingScreen) loadingScreen.style.display = 'none'; // Hide loading screen
        });
});


    const { PDFDocument, rgb, StandardFonts } = PDFLib;

    let pdfDoc;
    
    async function llcupdatePdf() { 
        
      const businessname = document.getElementById('businessname').value;  
      const firstname = document.getElementById('firstname').value;  
      const midname = document.getElementById('midname').value;  
      const lastname = document.getElementById('lastname').value;  
      const phone = document.getElementById('phone').value;  
      const fax = document.getElementById('fax').value;  
      const email = document.getElementById('email').value;  
      const address = document.getElementById('address').value;  

      const addresscity = document.getElementById('addresscity').value;  
      const addressstate = document.getElementById('addressstate').value;  
      const addresszipcode = document.getElementById('addresszipcode').value;  
      const addresscounty = document.getElementById('addresscounty').value;  
      
      const formacorporation = document.getElementById('formacorporation').value;  
      const stateof = document.getElementById('stateof').value;  
      const companynamechoice1 = document.getElementById('companynamechoice1').value;  
      const companynamechoice2 = document.getElementById('companynamechoice2').value;  
      const companynamechoice3 = document.getElementById('companynamechoice3').value;  
      const companynamechoice4 = document.getElementById('companynamechoice4').value;  
      const companynamechoice5 = document.getElementById('companynamechoice5').value;  
       const qtyshares = document.getElementById('qtyshares').value;  
      const noparvalue = document.getElementById('noparvalue').value;  
      const parvalue = document.getElementById('parvalue').value;  
      const briefdescription = document.getElementById('briefdescription').value;  
      const principalbusiness = document.getElementById('principalbusiness').value;  
      const businesscity = document.getElementById('businesscity').value;  
      const businesscounty = document.getElementById('businesscounty').value;  
      const busineszip = document.getElementById('busineszip').value;  
      const bcounty = document.getElementById('bcounty').value;  
      
      
      const agenttitle = document.getElementById('agenttitle').value;  
      const agentaddress = document.getElementById('agentaddress').value;  
      const agentcity = document.getElementById('agentcity').value;  
      const agentstate = document.getElementById('agentstate').value;  
      const agentzip = document.getElementById('agentzip').value;  
      const agentcounty = document.getElementById('agentcounty').value;  
      
      
      const shareholdername1 = document.getElementById('shareholdername1').value;  
      const shareholderss1 = document.getElementById('shareholderss1').value;  
      const shareholdertitle1 = document.getElementById('shareholdertitle1').value;  
      const shareholderaddress1 = document.getElementById('shareholderaddress1').value;  
      const shareholder1addresscity = document.getElementById('shareholder1addresscity').value;  
      const shareholder1addressstate = document.getElementById('shareholder1addressstate').value;  
      const shareholder1addresszipcode = document.getElementById('shareholder1addresszipcode').value;  
      const shareholder1addresscounty = document.getElementById('shareholder1addresscounty').value;  

      const shareholdername2 = document.getElementById('shareholdername2').value;  
      const shareholderss2 = document.getElementById('shareholderss2').value;  
      const shareholdertitle2 = document.getElementById('shareholdertitle2').value;  
      const shareholderaddress2 = document.getElementById('shareholderaddress2').value;  
      const shareholder2addresscity = document.getElementById('shareholder2addresscity').value;  
      const shareholder2addressstate = document.getElementById('shareholder2addressstate').value;  
      const shareholder2addresszipcode = document.getElementById('shareholder2addresszipcode').value;  
      const shareholder2addresscounty = document.getElementById('shareholder2addresscounty').value;   

      const shareholdername3 = document.getElementById('shareholdername3').value;  
      const shareholderss3 = document.getElementById('shareholderss3').value;  
      const shareholdertitle3 = document.getElementById('shareholdertitle3').value;  
      const shareholderaddress3 = document.getElementById('shareholderaddress3').value;  
      const shareholder3addresscity = document.getElementById('shareholder3addresscity').value;  
      const shareholder3addressstate = document.getElementById('shareholder3addressstate').value;  
      const shareholder3addresszipcode = document.getElementById('shareholder3addresszipcode').value;  
      const shareholder3addresscounty = document.getElementById('shareholder3addresscounty').value;  

      const shareholdername4 = document.getElementById('shareholdername4').value;  
      const shareholderss4 = document.getElementById('shareholderss4').value;  
      const shareholdertitle4 = document.getElementById('shareholdertitle4').value;  
      const shareholderaddress4 = document.getElementById('shareholderaddress4').value;  
      const shareholder4addresscity = document.getElementById('shareholder4addresscity').value;  
      const shareholder4addressstate = document.getElementById('shareholder4addressstate').value;  
      const shareholder4addresszipcode = document.getElementById('shareholder4addresszipcode').value;  
      const shareholder4addresscounty = document.getElementById('shareholder4addresscounty').value;  
  
      const levelservice = document.querySelector('input[name="levelservice"]:checked').value;
      const eintaxid = document.querySelector('input[name="eintaxid"]:checked').value;
       const regagent = document.querySelector('input[name="regagent"]:checked').value;
      const isitllc = document.querySelector('input[name="isitllc"]:checked').value;
      const ifthisllc = document.querySelector('input[name="ifthisllc"]:checked').value;
      const llckit = document.querySelector('input[name="llckit"]:checked').value;
       


      
      // Check if PDF document is loaded
      if (!pdfDoc) {
        const url = 'img/bpf.pdf';
        const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer());
        pdfDoc = await PDFDocument.load(existingPdfBytes);
      }
    
      // Embed the Helvetica font
      const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica);
    
      // Get the first page of the document
      const pages = pdfDoc.getPages();
      const firstPage = pages[0];
    
      // Clear previous text
      firstPage.drawText('', {
        x: 5,
        y: 495, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
      });
    
      const LS1 = 1
      const LS2 = 2
      const LS3 = 3
      const LS4 = 4
      const LS5 = 5
    
      //Basic Information

 
    
      // 44
      firstPage.drawText(`${businessname}`, {
        x: 118,
        y: 648, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${firstname}`, {
        x: 89,
        y: 664, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${midname}`, {
        x: 302,
        y: 664, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${lastname}`, {
        x: 466,
        y: 664, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${phone}`, {
        x: 80,
        y: 631, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${fax}`, {
        x: 215,
        y: 631, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${email}`, {
        x: 400,
        y: 631, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${address}`, {
        x: 40,
        y: 608, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${addresscity}`, {
        x: 195,
        y: 608, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${addressstate}`, {
        x: 283,
        y: 608, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${addresszipcode}`, {
        x: 324,
        y: 608, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${addresscounty}`, {
        x: 430,
        y: 608, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${formacorporation}`, {
        x: 179,
        y: 544, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 
 


      // 44
      firstPage.drawText(`${stateof}`, {
        x: 410,
        y: 544, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 
 

      // 44
      firstPage.drawText(`${companynamechoice1}`, {
        x: 190,
        y: 520, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${companynamechoice2}`, {
        x: 190,
        y: 502, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 
 

      // 44
      firstPage.drawText(`${companynamechoice3}`, {
        x: 190,
        y: 484, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${companynamechoice4}`, {
        x: 190,
        y: 466, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 
  
      // 44
      firstPage.drawText(`${companynamechoice5}`, {
        x: 190,
        y: 448, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });     

      // 44
      firstPage.drawText(`${qtyshares}`, {
        x: 215,
        y: 414, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${noparvalue}`, {
        x: 342,
        y: 414, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

 
      // 44
      firstPage.drawText(`${parvalue}`, {
        x: 457,
        y: 414, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${briefdescription}`, {
        x: 254,
        y: 389, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${principalbusiness}`, {
        x: 202,
        y: 373, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${businesscity}`, {
        x: 80,
        y: 357, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${businesscounty}`, {
        x: 256,
        y: 357, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${busineszip}`, {
        x: 380,
        y: 357, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${bcounty}`, {
        x: 482,
        y: 357, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${agenttitle}`, {
        x: 124,
        y: 310, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${agentaddress}`, {
        x: 341,
        y: 310, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${agentcity}`, {
        x: 83,
        y: 295, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${agentstate}`, {
        x: 259,
        y: 295, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${agentzip}`, {
        x: 380,
        y: 295, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${agentcounty}`, {
        x: 485,
        y: 295, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 




      // 44
      firstPage.drawText(`${shareholdername1}`, {
        x: 70,
        y: 257, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderss1}`, {
        x: 293,
        y: 257, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholdertitle1}`, {
        x: 430,
        y: 257, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderaddress1}`, {
        x: 86,
        y: 241, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${shareholder1addresscity}`, {
        x: 194,
        y: 241, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder1addressstate}`, {
        x: 290,
        y: 241, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder1addresszipcode}`, {
        x: 353,
        y: 241, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder3addresscounty}`, {
        x: 430,
        y: 241, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholdername2}`, {
        x: 70,
        y: 221, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderss2}`, {
        x: 293,
        y: 221, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholdertitle2}`, {
        x: 430,
        y: 221, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderaddress2}`, {
        x: 86,
        y: 205, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${shareholder2addresscity}`, {
        x: 194,
        y: 205, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder2addressstate}`, {
        x: 290,
        y: 205, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder2addresszipcode}`, {
        x: 353,
        y: 205, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder2addresscounty}`, {
        x: 430,
        y: 205, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholdername3}`, {
        x: 70,
        y: 189, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderss3}`, {
        x: 293,
        y: 189, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholdertitle3}`, {
        x: 430,
        y: 189, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderaddress3}`, {
        x: 86,
        y: 174, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder3addresscity}`, {
        x: 194,
        y: 174, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder3addressstate}`, {
        x: 290,
        y: 174, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder3addresszipcode}`, {
        x: 353,
        y: 174, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder3addresscounty}`, {
        x: 430,
        y: 174, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${shareholdername4}`, {
        x: 70,
        y: 157, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholderss4}`, {
        x: 293,
        y: 157, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 



      // 44
      firstPage.drawText(`${shareholdertitle4}`, {
        x: 430,
        y: 157, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholderaddress4}`, {
        x: 86,
        y: 142, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 


      // 44
      firstPage.drawText(`${shareholder4addresscity}`, {
        x: 194,
        y: 142, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder4addressstate}`, {
        x: 290,
        y: 142, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder4addresszipcode}`, {
        x: 353,
        y: 142, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

      // 44
      firstPage.drawText(`${shareholder4addresscounty}`, {
        x: 430,
        y: 142, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      }); 

     // Load a font that supports the checkbox symbol
    //const fontBytes = await fetch('path_to_checkbox_font.ttf').then(res => res.arrayBuffer());
    //const checkboxFont = await pdfDoc.embedFont(pdfBytes);
    
    const iconImageBytes = await fetch('/img/check2.png').then(res => res.arrayBuffer());
    const iconImage = await pdfDoc.embedPng(iconImageBytes);
    //const iconImage2 = await pdfDoc.embedPng(iconImageBytes);
    
    let levelserviceYCoordinate;
    let levelserviceXCoordinate;
    
    if (levelservice === "Standard") {
      levelserviceXCoordinate = 166;
      levelserviceYCoordinate = 581;
    } else if (levelservice === "Expedited") {
      levelserviceXCoordinate = 229;
      levelserviceYCoordinate = 581;
    }
    
    firstPage.drawImage(iconImage, {
      x: levelserviceXCoordinate,
      y: levelserviceYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });

    let eintaxidYCoordinate;
    let eintaxidXCoordinate;
    
    if (eintaxid === "eintaxidYes") {
      eintaxidXCoordinate = 168;
      eintaxidYCoordinate = 566;
    } else if (eintaxid === "eintaxidNo") {
      eintaxidXCoordinate = 204;
      eintaxidYCoordinate = 566;
    }
    
    firstPage.drawImage(iconImage, {
      x: eintaxidXCoordinate,
      y: eintaxidYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });

    let regagentYCoordinate;
    let regagentXCoordinate;
    
    if (regagent === "PromptfilingsActAgent") {
      regagentXCoordinate = 475;
      regagentYCoordinate = 334;
    } else if (regagent === "OwnActAgent") {
      regagentXCoordinate = 514;
      regagentYCoordinate = 334;
    }
    
    firstPage.drawImage(iconImage, {
      x: regagentXCoordinate,
      y: regagentYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });


    let isitllcYCoordinate;
    let isitllcXCoordinate;
    
    if (isitllc === "C-CORP") {
      isitllcXCoordinate = 79;
      isitllcYCoordinate = 115;
    } else if (isitllc === "S-Corp") {
      isitllcXCoordinate = 157;
      isitllcYCoordinate = 115;
    }
    
    firstPage.drawImage(iconImage, {
      x: isitllcXCoordinate,
      y: isitllcYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });
 
    let ifthisllcYCoordinate;
    let ifthisllcXCoordinate;
    
    if (ifthisllc === "Member Managed") {
      ifthisllcXCoordinate = 157;
      ifthisllcYCoordinate = 96;
    } else if (ifthisllc === "Manager Managed") {
      ifthisllcXCoordinate = 268;
      ifthisllcYCoordinate = 96;
    } else if (ifthisllc === "Single Member") {
      ifthisllcXCoordinate = 379;
      ifthisllcYCoordinate = 96;
    } else if (ifthisllc === "Multi Member") {
      ifthisllcXCoordinate = 489;
      ifthisllcYCoordinate = 96;
    }

    
    firstPage.drawImage(iconImage, {
      x: ifthisllcXCoordinate,
      y: ifthisllcYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });

    let llckitYCoordinate;
    let llckitXCoordinate;
    
    if (llckit === "LLCkit_Yes") {
      llckitXCoordinate = 214;
      llckitYCoordinate = 74;
    } else if (llckit === "LLCkit_No") {
      llckitXCoordinate = 252;
      llckitYCoordinate = 74;
    }
    
    firstPage.drawImage(iconImage, {
      x: llckitXCoordinate,
      y: llckitYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });
    
    
      // Update #newitn with check icon if checkbox is checked
     // const newitn = document.getElementById('newitn');
     // newitn.innerHTML = checkbox ? '&#10003;' : '';
    
      // Update PDF preview
      const pdfBytes = await pdfDoc.save();
      const pdfPreview = document.getElementById('pdfPreviewllc');
      pdfPreview.src = URL.createObjectURL(new Blob([pdfBytes], { type: 'application/pdf' }));
    
      // Enable download button
      //const downloadBtn = document.getElementById('downloadBtn');
      //downloadBtn.disabled = false;
    
      // Store updated PDF bytes
      window.updatedPdfBytes = pdfBytes;
      uploadPDF(pdfBlob); // Call the upload function
    
    }
    
    async function printPdfein() {
      const pdfPreview = document.getElementById('pdfPreviewllc');
      pdfPreview.contentWindow.print();
    }

    async function uploadPDF(pdfBlob) {
    const formData = new FormData();
    formData.append('pdf', pdfBlob, 'generated-document.pdf');

    // Get CSRF token from meta tag
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    try {
        const response = await fetch('/upload-pdf', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken, // Add CSRF token to headers
            },
            body: formData,
        });

        if (response.ok) {
            
            const result = await response.json();
            console.log('PDF uploaded successfully:', result);
            alert('PDF saved on server successfully!');
        } else {
            console.error('Failed to upload PDF:', response.statusText);
            alert('Failed to save PDF on server.');
        }
    } catch (error) {
        console.error('Error uploading PDF:', error);
        alert('Error saving PDF on server.');
    }
}
</script>  
<script>
document.getElementById('reviewapplicationn').addEventListener('click', function(event) {

// Get the form and modal elements
const modal = document.getElementById('reviewModal');
const modalContent = document.getElementById('modalContent');

// Get all form fields except those with the id="authpricing"
const formFields = document.querySelectorAll("#llcForm input:not(#confidetails input):not(#authpricing), #llcForm select:not([disabled]):not(#authpricing), #llcForm textarea:not(#confidetails textarea):not(#authpricing)");

var formein = document.getElementById("llcForm");

// Check if the form is valid
if (formein.checkValidity() === false) {
    event.stopPropagation(); // Prevent further actions if form is not valid
    alert('Please make sure to fill in all required fields.');
    formein.classList.add('was-validated');

    // Handle radio button validation
    var radios = formein.querySelectorAll('input[type="radio"]');
    var radioValid = false;
    radios.forEach(function (radio) {
        if (radio.checked) {
            radioValid = true;
        }
    });

    // Don't show modal if form is not valid
    return; // Exit the function early to prevent the modal from being displayed
} else {

    // If form is valid, generate the modal content
    let modalHtml = ""; // To hold the HTML content for the modal

    formFields.forEach(field => {
        let label = field.getAttribute("name") || field.getAttribute("id");
        let value = "";
        
        // Capitalize the label for display
        if (label) {
            label = label.charAt(0).toUpperCase() + label.slice(1);
        }

        // Handle different types of inputs
        if (field.type === "checkbox" || field.type === "radio") {
            if (field.checked) {
                value = field.value;
            }
        } else if (field.type === "file") {
            if (field.files.length > 0) {
                value = `File attached: ${field.files[0].name}`;
            }
        } else if (field.type === "select-one") {
            value = field.options[field.selectedIndex].text;
        } else {
            value = field.value;
        }

        // Add label and value to the modal content
        if (value) {
            modalHtml += `
                <div class="modal-field">
                    <strong>${label}:</strong> ${value}
                </div>
            `;
        }
    });

    // Inject the HTML into the modal
    modalContent.innerHTML = modalHtml;

    // Display the modal
    modal.style.display = "block";
}
});


// Close the modal when the user clicks on <span> (x)
document.querySelector('.close').addEventListener('click', function() {
    const modal = document.getElementById('reviewModal');
    modal.style.display = "none";
});

// Close the modal if the user clicks anywhere outside the modal
window.onclick = function(event) {
    const modal = document.getElementById('reviewModal');
    if (event.target === modal) {
        modal.style.display = "none";
    }
};

// Confirm button event (optional, if you want to process the form data after confirmation)
document.getElementById('confirmBtn').addEventListener('click', function() {
    const modal = document.getElementById('reviewModal');
    modal.style.display = "none"; // Close the modal after confirmation
    
    // You can add any additional logic here for form submission or processing
});

document.addEventListener('DOMContentLoaded', function () {
        const upgradeButtons = document.querySelectorAll('[data-bs-toggle="modal"]');

        upgradeButtons.forEach(button => {
            button.addEventListener('click', function () {
                const packageId = this.getAttribute('data-package-id');
                const packageName = this.getAttribute('data-package-name');
                //const packagePrice = this.getAttribute('data-package-price'); // Price from data attribute
                const packagePrice = document.getElementById('authpricing').value;
                

                // Update the modal with the correct package information
                document.getElementById('package_id').value = packageId;
                document.getElementById('packageNameDisplay').innerText = `Package: ${packageName}`;
                
                // Set the amount to the package price and make it readonly
                const amountField2 = document.getElementById('amount2');
                const amountField = document.getElementById('amount');
                amountField2.textContent = "$" + packagePrice; // Set the price dynamically
                amountField.value = packagePrice; // Set the price dynamically
                amountField.setAttribute('readonly', true); // Prevent editing
            });
        });
    });
                  

document.getElementById('expiry_date').addEventListener('input', function (e) {
    let value = e.target.value.replace(/\D/g, ''); // Remove non-numeric characters
    if (value.length > 2) {
        value = value.substring(0, 2) + '/' + value.substring(2, 4);
    }
    e.target.value = value;
});

</script>

</x-app-layout>

