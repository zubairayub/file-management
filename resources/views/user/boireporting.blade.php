<x-app-layout>
  <div id="appdashboard">
    <!-- Dashboard --> 
                    <div class="card shadow border-0 mb-7" id="eintabsection">
                        <div class="content">
                            <div class="py-4 px-3 px-md-4">
                                <div class="mb-3 mb-md-4 d-flex justify-content-between">
                                    <div class="h3 mb-0">Application for BOI Reporting</div>
                                </div>
                                
                          <div class="row my-5">
                            <div class="col-md-12">
                                  <div class="alert alert-warning d-block">
                                    <small class="d-block"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="You can apply for an EIN online (only for applicants in the U.S. or U.S. territories), by telephone (only for applicants outside of the U.S. or U.S. territories), by fax, or by mail, depending on how soon you need to use the EIN. Use only one method for each entity so you don’t receive more than one EIN for an entity."></i> Read before start the application.</small>
                                    <small class="d-block"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter “N/A” (not applicable) on all sections of each line that don't apply to you. Don't leave any section blank. For example, line 4 should have three separate entries."></i> Enter “N/A” (not applicable) on all sections of each line that don't apply to you..  </small>
                                    </div>
                                    </div>
                                    </div> 
                                <form id="boiForm" class="row g-3 formsubmission needs-validation" novalidate enctype="application/x-www-form-urlencoded">
                                     <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Part I. Filing Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                              <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                  Need Help?
                                                                </button>
                                                              </h2>
                                                              <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                  <strong>Instructions for Item 1 - Type of filing:</strong>
                                                                  <ul class="m-0">
                                                                    <li>Check box 1a “Initial report” if this is the first BOIR filed for the reporting company.</p>
                                                                        </li>
                                                                        <li><p>Check box 1b “Correct prior report” if the report corrects inaccurate information from a previously filed BOIR.</p></li>
                                                                        <li><p>Check box 1c “Update prior report” if the report updates a previously filed BOIR, for example, to include one or more new beneficial owners.</p></li>
                                                                        <li><p>Check box 1d “Newly exempt entity” if, after having filed a BOIR, the reporting company is now exempt from BOI reporting requirements. If this checkbox is selected, then filer must fill out fields 1e-1h (reporting company information associated with most recent report) and no other fields in the BOIR.</p></li>
                                                                        <li><p>If type of filing 1b, 1c, or 1d is selected, enter values for 1e “Legal name”, 1f “Tax identification type”, and 1g “Tax identification number” for the reporting company that match the most recently filed BOIR. For example, if the reporting company previously filed an initial report and then an updated report, the reporting company information in the next updated report should match the reporting company information provided on the most recently filed updated report rather than the initial report.</p></li>
                                                                        <li><p>For 1f, select the tax identification type (i.e., a U.S. Employer Identification Number (EIN), a U.S. Social Security Number or Individual Taxpayer Identification Number (SSN-ITIN), or foreign taxpayer identification number (Foreign)) the reporting company reported in the most recently filed BOIR. If tax identification type entered in 1f is “Foreign”, select the corresponding foreign country/jurisdiction in 1h “Country/Jurisdiction (if foreign tax ID only)” associated with the foreign tax identification number.</p></li>
                                                                        </ul>
  
                                                                        <strong> Instructions for Item 2 - Date prepared:</strong>
                                                                        <ul class="m-0">
                                                                        <li><p>This item is automatically populated with the current date.</p></li>
                                                                    </ul>
                                                                </div>
                                                              </div>
                                                            </div>  </div>
                                                            </div>
                                                    <div class="col-lg-12">
                                                        <label for="firstname" class="mid">1. Type of Filing &nbsp; <span
                                                                style="color:red">*</span></label>
                                                                <div class="radiobox">
                                                                            <label>
                                                                                <input type="radio" id="InitialReport"
                                                                                    name="Type of Filing" value="Initial Report"
                                                                                    class="radio radio radioInput  form-check-input" >
                                                                                    Initial Report</label>
                                                                                    <label>
                                                                                        <input type="radio" id="CorrectPriorReport"
                                                                                            name="Type of Filing" value="Correct Prior Report"
                                                                                            class="radio radio radioInput  form-check-input" >
                                                                                            Correct Prior Report</label>
                                                                                            <label>
                                                                                                <input type="radio" id="UpdatePriorReport"
                                                                                                    name="Type of Filing" value="Update Prior Report"
                                                                                                    class="radio radio radioInput  form-check-input" >
                                                                                                    Update Prior Report</label>
                                                                                                    <label>
                                                                                                        <input type="radio" id="NewlyExemptEntity"
                                                                                                            name="Type of Filing" value="Newly Exempt Entity"
                                                                                                            class="radio radio radioInput  form-check-input" >
                                                                                                            Newly Exempt Entity</label>
                                                                </div>
                                                        </div> 
                                                        <div class="col-lg-6 reportinngcompanynotinitial" style="display: none;">
                                                            <label for="firstname" class="mid">Reporting Company associated with latest report (not applicable for initial report) &nbsp; <span style="color:red">*</span></label>
                                                            <div class="legalnamepriorreport">
                                                                <label for="legalnamepriorreportname" class="mid">e. Legal name
                                                                    &nbsp; <span style="color:red">*</span></label>
                                                                <input type="text" id="legalnamepriorreportname" class="form-control"
                                                                    name="Legal name" placeholder="Enter Legal name" >
                                                                    <label for="legalnamepriorreporttax" class="mid">f. Tax Identification type &nbsp; <span style="color:red">*</span></label>
                                                                    <select class="form-control" name="Tax Identification type" id="legalnamepriorreporttax" aria-hidden="true" >
                                                                      <option disabled selected>Select Tax Identification Type</option>
                                                                      <option value="EIN">EIN</option>
                                                                      <option value="SSN-ITIN">SSN/ITIN</option>
                                                                      <option value="Foriegn">Foreign</option>
                                                                    </select>
                                                                    <label for="legalnamepriorreporttaxnumber" class="mid">g. Tax Identification number &nbsp; <span style="color:red">*</span></label>
                                                                    <input type="text" id="legalnamepriorreporttaxnumber" class="form-control"
                                                                        name="Tax Identification number" placeholder="Enter Tax Identification number" >
                                                                        <div class="legalnamepriorreporttaxcountry" style="display: none;">
                                                                     <label for="legalnamepriorreporttaxcountry" class="mid">h. Country/Jurisdiction (if foreign tax ID only)</label>
                                                                    <select id="legalnamepriorreporttaxcountry" class="form-control form-select" name="Country/Jurisdiction (if foreign tax ID only)" >
                                                                      <option disabled selected>Select a country</option>
                                                                        <option value="AF">Afghanistan</option>
                                                                        <option value="AL">Albania</option>
                                                                        <option value="DZ">Algeria</option>
                                                                        <option value="AS">American Samoa</option>
                                                                        <option value="AD">Andorra</option>
                                                                        <option value="AO">Angola</option>
                                                                        <option value="AI">Anguilla</option>
                                                                        <option value="AG">Antigua and Barbuda</option>
                                                                        <option value="AR">Argentina</option>
                                                                        <option value="AM">Armenia</option>
                                                                        <option value="AW">Aruba</option>
                                                                        <option value="AU">Australia</option>
                                                                        <option value="AT">Austria</option>
                                                                        <option value="AZ">Azerbaijan</option>
                                                                        <option value="BS">Bahamas</option>
                                                                        <option value="BH">Bahrain</option>
                                                                        <option value="BD">Bangladesh</option>
                                                                        <option value="BB">Barbados</option>
                                                                        <option value="BY">Belarus</option>
                                                                        <option value="BE">Belgium</option>
                                                                        <option value="BZ">Belize</option>
                                                                        <option value="BJ">Benin</option>
                                                                        <option value="BM">Bermuda</option>
                                                                        <option value="BT">Bhutan</option>
                                                                        <option value="BO">Bolivia</option>
                                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                                        <option value="BW">Botswana</option>
                                                                        <option value="BR">Brazil</option>
                                                                        <option value="IO">British Indian Ocean Territory</option>
                                                                        <option value="VG">British Virgin Islands</option>
                                                                        <option value="BN">Brunei</option>
                                                                        <option value="BG">Bulgaria</option>
                                                                        <option value="BF">Burkina Faso</option>
                                                                        <option value="BI">Burundi</option>
                                                                        <option value="CV">Cabo Verde</option>
                                                                        <option value="KH">Cambodia</option>
                                                                        <option value="CM">Cameroon</option>
                                                                        <option value="CA">Canada</option>
                                                                        <option value="KY">Cayman Islands</option>
                                                                        <option value="CF">Central African Republic</option>
                                                                        <option value="TD">Chad</option>
                                                                        <option value="CL">Chile</option>
                                                                        <option value="CN">China</option>
                                                                        <option value="CX">Christmas Island</option>
                                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                                        <option value="CO">Colombia</option>
                                                                        <option value="KM">Comoros</option>
                                                                        <option value="CG">Congo</option>
                                                                        <option value="CD">Congo, Democratic Republic of the</option>
                                                                        <option value="CK">Cook Islands</option>
                                                                        <option value="CR">Costa Rica</option>
                                                                        <option value="CI">Côte d'Ivoire</option>
                                                                        <option value="HR">Croatia</option>
                                                                        <option value="CU">Cuba</option>
                                                                        <option value="CW">Curaçao</option>
                                                                        <option value="CY">Cyprus</option>
                                                                        <option value="CZ">Czech Republic</option>
                                                                        <option value="DK">Denmark</option>
                                                                        <option value="DJ">Djibouti</option>
                                                                        <option value="DM">Dominica</option>
                                                                        <option value="DO">Dominican Republic</option>
                                                                        <option value="EC">Ecuador</option>
                                                                        <option value="EG">Egypt</option>
                                                                        <option value="SV">El Salvador</option>
                                                                        <option value="GQ">Equatorial Guinea</option>
                                                                        <option value="ER">Eritrea</option>
                                                                        <option value="EE">Estonia</option>
                                                                        <option value="SZ">Eswatini</option>
                                                                        <option value="ET">Ethiopia</option>
                                                                        <option value="FK">Falkland Islands</option>
                                                                        <option value="FO">Faroe Islands</option>
                                                                        <option value="FJ">Fiji</option>
                                                                        <option value="FI">Finland</option>
                                                                        <option value="FR">France</option>
                                                                        <option value="GF">French Guiana</option>
                                                                        <option value="PF">French Polynesia</option>
                                                                        <option value="TF">French Southern Territories</option>
                                                                        <option value="GA">Gabon</option>
                                                                        <option value="GM">Gambia</option>
                                                                        <option value="GE">Georgia</option>
                                                                        <option value="DE">Germany</option>
                                                                        <option value="GH">Ghana</option>
                                                                        <option value="GI">Gibraltar</option>
                                                                        <option value="GR">Greece</option>
                                                                        <option value="GL">Greenland</option>
                                                                        <option value="GD">Grenada</option>
                                                                        <option value="GP">Guadeloupe</option>
                                                                        <option value="GU">Guam</option>
                                                                        <option value="GT">Guatemala</option>
                                                                        <option value="GG">Guernsey</option>
                                                                        <option value="GN">Guinea</option>
                                                                        <option value="GW">Guinea-Bissau</option>
                                                                        <option value="GY">Guyana</option>
                                                                        <option value="HT">Haiti</option>
                                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                                        <option value="VA">Vatican City</option>
                                                                        <option value="HN">Honduras</option>
                                                                        <option value="HK">Hong Kong</option>
                                                                        <option value="HU">Hungary</option>
                                                                        <option value="IS">Iceland</option>
                                                                        <option value="IN">India</option>
                                                                        <option value="ID">Indonesia</option>
                                                                        <option value="IR">Iran</option>
                                                                        <option value="IQ">Iraq</option>
                                                                        <option value="IE">Ireland</option>
                                                                        <option value="IM">Isle of Man</option>
                                                                        <option value="IL">Israel</option>
                                                                        <option value="IT">Italy</option>
                                                                        <option value="JM">Jamaica</option>
                                                                        <option value="JP">Japan</option>
                                                                        <option value="JE">Jersey</option>
                                                                        <option value="JO">Jordan</option>
                                                                        <option value="KZ">Kazakhstan</option>
                                                                        <option value="KE">Kenya</option>
                                                                        <option value="KI">Kiribati</option>
                                                                        <option value="KP">North Korea</option>
                                                                        <option value="KR">South Korea</option>
                                                                        <option value="KW">Kuwait</option>
                                                                        <option value="KG">Kyrgyzstan</option>
                                                                        <option value="LA">Laos</option>
                                                                        <option value="LV">Latvia</option>
                                                                        <option value="LB">Lebanon</option>
                                                                        <option value="LS">Lesotho</option>
                                                                        <option value="LR">Liberia</option>
                                                                        <option value="LY">Libya</option>
                                                                        <option value="LI">Liechtenstein</option>
                                                                        <option value="LT">Lithuania</option>
                                                                        <option value="LU">Luxembourg</option>
                                                                        <option value="MO">Macao</option>
                                                                        <option value="MK">North Macedonia</option>
                                                                        <option value="MG">Madagascar</option>
                                                                        <option value="MW">Malawi</option>
                                                                        <option value="MY">Malaysia</option>
                                                                        <option value="MV">Maldives</option>
                                                                        <option value="ML">Mali</option>
                                                                        <option value="MT">Malta</option>
                                                                        <option value="MH">Marshall Islands</option>
                                                                        <option value="MQ">Martinique</option>
                                                                        <option value="MR">Mauritania</option>
                                                                        <option value="MU">Mauritius</option>
                                                                        <option value="YT">Mayotte</option>
                                                                        <option value="MX">Mexico</option>
                                                                        <option value="FM">Micronesia</option>
                                                                        <option value="MD">Moldova</option>
                                                                        <option value="MC">Monaco</option>
                                                                        <option value="MN">Mongolia</option>
                                                                        <option value="ME">Montenegro</option>
                                                                        <option value="MS">Montserrat</option>
                                                                        <option value="MA">Morocco</option>
                                                                        <option value="MZ">Mozambique</option>
                                                                        <option value="MM">Myanmar</option>
                                                                        <option value="NA">Namibia</option>
                                                                        <option value="NR">Nauru</option>
                                                                        <option value="NP">Nepal</option>
                                                                        <option value="NL">Netherlands</option>
                                                                        <option value="NC">New Caledonia</option>
                                                                        <option value="NZ">New Zealand</option>
                                                                        <option value="NI">Nicaragua</option>
                                                                        <option value="NE">Niger</option>
                                                                        <option value="NG">Nigeria</option>
                                                                        <option value="NU">Niue</option>
                                                                        <option value="NF">Norfolk Island</option>
                                                                        <option value="MP">Northern Mariana Islands</option>
                                                                        <option value="NO">Norway</option>
                                                                        <option value="OM">Oman</option>
                                                                        <option value="PK">Pakistan</option>
                                                                        <option value="PW">Palau</option>
                                                                        <option value="PS">Palestine</option>
                                                                        <option value="PA">Panama</option>
                                                                        <option value="PG">Papua New Guinea</option>
                                                                        <option value="PY">Paraguay</option>
                                                                        <option value="PE">Peru</option>
                                                                        <option value="PH">Philippines</option>
                                                                        <option value="PN">Pitcairn Islands</option>
                                                                        <option value="PL">Poland</option>
                                                                        <option value="PT">Portugal</option>
                                                                        <option value="PR">Puerto Rico</option>
                                                                        <option value="QA">Qatar</option>
                                                                        <option value="RE">Réunion</option>
                                                                        <option value="RO">Romania</option>
                                                                        <option value="RU">Russia</option>
                                                                        <option value="RW">Rwanda</option>
                                                                        <option value="BL">Saint Barthélemy</option>
                                                                        <option value="SH">Saint Helena</option>
                                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                                        <option value="LC">Saint Lucia</option>
                                                                        <option value="MF">Saint Martin</option>
                                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                                        <option value="WS">Samoa</option>
                                                                        <option value="SM">San Marino</option>
                                                                        <option value="SA">Saudi Arabia</option>
                                                                        <option value="SN">Senegal</option>
                                                                        <option value="RS">Serbia</option>
                                                                        <option value="SC">Seychelles</option>
                                                                        <option value="SL">Sierra Leone</option>
                                                                        <option value="SG">Singapore</option>
                                                                        <option value="SX">Sint Maarten</option>
                                                                        <option value="SK">Slovakia</option>
                                                                        <option value="SI">Slovenia</option>
                                                                        <option value="SB">Solomon Islands</option>
                                                                        <option value="SO">Somalia</option>
                                                                        <option value="ZA">South Africa</option>
                                                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                        <option value="SS">South Sudan</option>
                                                                        <option value="ES">Spain</option>
                                                                        <option value="LK">Sri Lanka</option>
                                                                        <option value="SD">Sudan</option>
                                                                        <option value="SR">Suriname</option>
                                                                        <option value="SZ">Eswatini</option>
                                                                        <option value="SE">Sweden</option>
                                                                        <option value="CH">Switzerland</option>
                                                                        <option value="SY">Syria</option>
                                                                        <option value="TW">Taiwan</option>
                                                                        <option value="TJ">Tajikistan</option>
                                                                        <option value="TZ">Tanzania</option>
                                                                        <option value="TH">Thailand</option>
                                                                        <option value="TL">Timor-Leste</option>
                                                                        <option value="TG">Togo</option>
                                                                        <option value="TK">Tokelau</option>
                                                                        <option value="TO">Tonga</option>
                                                                        <option value="TT">Trinidad and Tobago</option>
                                                                        <option value="TN">Tunisia</option>
                                                                        <option value="TR">Turkey</option>
                                                                        <option value="TM">Turkmenistan</option>
                                                                        <option value="TC">Turks and Caicos Islands</option>
                                                                        <option value="TV">Tuvalu</option>
                                                                        <option value="UG">Uganda</option>
                                                                        <option value="UA">Ukraine</option>
                                                                        <option value="AE">United Arab Emirates</option>
                                                                        <option value="GB">United Kingdom</option>
                                                                        <option value="US">United States</option>
                                                                        <option value="UY">Uruguay</option>
                                                                        <option value="UZ">Uzbekistan</option>
                                                                        <option value="VU">Vanuatu</option>
                                                                        <option value="VE">Venezuela</option>
                                                                        <option value="VN">Vietnam</option>
                                                                        <option value="WF">Wallis and Futuna</option>
                                                                        <option value="EH">Western Sahara</option>
                                                                        <option value="YE">Yemen</option>
                                                                        <option value="ZM">Zambia</option>
                                                                        <option value="ZW">Zimbabwe</option>                                            
                                                                    </select>
                                                                    </div>
                                                            </div>
                                                                    </div>
                                                        <p class="col-md-12">&nbsp;</p>
                                                        <div class="col-lg-3">
                                                            <label for="dateprepareddate" class="mid">2. Date prepared </label>
                                                              <div class="d-flex">
                                                                <input type="text" id="dateprepared" disabled pattern="[0-9]{1,2}" class="form-control " name="Date prepared">
                                                              </div>
                                                          </div>
                                                </div>
                                            </div>
                                        </div>
</div>
<div class="col-md-12 col-xl-12 mb-3 mb-md-4">
    <div class="card  mt-4 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Reporting Company Information
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="accordion" id="accordion2">
                                                            <div class="accordion-item">
                                                              <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                                  Need Help?
                                                                </button>
                                                              </h2>
                                                              <div id="collapseTwo" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion2">
                                                                <div class="accordion-body">
                                                                  <p>Reporting company information is entered in fields 3 through 16 of the BOIR.</p>
                                                                  <p><b>Instructions for Item 3 - Request to receive FinCEN Identifier (FinCEN ID):</b></p>
                                                                  <p>Check this box to receive a unique FinCEN Identifier for the reporting company. The FinCEN Identifier will be provided in the submission confirmation details provided to the filer after the BOIR is accepted.</p>
                                                                  <p><b>Instructions for Item 4 - Foreign pooled investment vehicle:</b></p>
                                                                  <p>Check this box if the reporting company is a foreign pooled investment vehicle to report information pursuant to 31 CFR 1010.380(b)(2)(iii).</p>
                                                                  <ul class="m-0">
                                                                    <li>If the reporting company is a foreign pooled investment vehicle, the company need only report one beneficial owner who exercises substantial control over the entity. If more than one individual exercise substantial control over the entity, the entity shall report information with respect to the individual who has the greatest authority over the strategic management of the entity. The report should not include any information about company applicants.</li>
                                                                    </ul></div></div></div></div>
                                                                    </div>
  
                                                    <div class="col-lg-4">
                                                        <label for="eintaxid" class="mid">3. Request to receive FinCEN ID </label>
                                                            <div class="radiobox">
                                                                <label>
                                                                    <input type="radio" id="receivefinCENYes" name="Receive FinCEN"
                                                                        value="YES" class="radio radioInput  form-check-input">
                                                                    Yes</label>
                                                                <label>
                                                                    <input type="radio" id="receivefinCENNo" name="Receive FinCEN"
                                                                        value="NO" class="radio radioInput  form-check-input">
                                                                    No</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="foriegnpooledinvesm" class="mid">4. Foriegn Pooled Investment Vehicle</label>
                                                        <div class="radiobox">
                                                            <label>
                                                                <input type="radio" id="foriegnpooledinvesmYes" name="Foriegn Pooled Investment Vehicle"
                                                                    value="YES" class="radio radioInput  form-check-input">
                                                                Yes</label>
                                                            <label>
                                                                <input type="radio" id="foriegnpooledinvesmNo" name="Foriegn Pooled Investment Vehicle"
                                                                    value="NO" class="radio radioInput  form-check-input">
                                                                No</label>
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
</div>
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-4 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Legal Name & Alternate Name(s)
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="accordion" id="accordion3">
                                                            <div class="accordion-item">
                                                              <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                                  Need Help?
                                                                </button>
                                                              </h2>
                                                              <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion3">
                                                                <div class="accordion-body">
                                                                   <p><b>Instructions for Item 5 - Reporting company legal name:
                                                                    </b></p>
                                                                  <p>Enter the reporting company’s full legal name as recorded on the articles of incorporation or other documents creating or registering the entity.</p>
                                                                  <p><b>Instructions for Item 6 - Alternate name:</b></p>
                                                                  <p>Enter any of the reporting company’s trade names, “doing business as” or DBA names, or “trading as” or T/A names. If the reporting company has multiple alternate names, use the “+” or “-“ buttons in the BOIR to add additional alternate name fields (one field for each alternate name). Do not include the acronyms DBA or AKA with the alternate name.</p>
                                                                </div></div></div></div>
                                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="Reporting Company Legal Name" class="mid">5. Reporting Company Legal Name&nbsp; <span style="color:red">*</span></label>
                                                        <input type="text" id="reportingcompanylegalname" class="form-control"
                                                            name="Reporting Company Legal Name" placeholder="Enter Reporting Company Legal Name" >
                                                    </div>
                                                    <div class="col-lg-12">&nbsp;</div>
                                                    <div class="col-lg-3" id="morealternatename">
                                                        <label for="reportingcompanyalternatename" class="mid">6. Alternate Name (e.g, trade name, DBA)</label>
                                                        <input type="text" id="reportingcompanyalternatename" class="form-control" name="Alternate Name" placeholder="Enter Alternate Name" >
                                                         </div>
                                                        <div class="col-lg-12 my-5"><button type="button" id="addalternatename" class="btn btn-primary">Add Alternate Name</button></div> 
                                                </div>
                                            </div>
                                        </div>
                                            </div>
                                        <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Form of Identification
                                                </h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center justify-content-start">
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="accordion" id="accordion5">
                                                            <div class="accordion-item">
                                                              <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="true" aria-controls="collapsefive">
                                                                  Need Help?
                                                                </button>
                                                              </h2>
                                                              <div id="collapsefive" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion5">
                                                                <div class="accordion-body">
                                                                   <p><b>Instructions for Item 7 - Tax identification type:</b></p>
                                                                   <p>Select “EIN” if the reporting company has a U.S. Employer Identification Number (EIN). Select “SSN-ITIN” if the reporting company utilizes a U.S. Social Security Number (SSN) or Individual Taxpayer Identification Number (ITIN) as a tax identification number. Select “Foreign” if the reporting company has a tax identification number issued by a foreign jurisdiction and does not have a U.S. tax identification number.</p>
                                                                   <p><b>Instructions for Item 8 - Tax identification number:</b></p>
                                                                   <p>Enter the tax identification number for the reporting company.</p>
                                                                   <p><b>Instructions for Item 9 - Country/Jurisdiction:</b></p>
                                                                   <p>If the tax identification type in item 7 is “Foreign”, select the foreign country/jurisdiction that issued the foreign tax identification number.</p>
                                                                </div></div></div></div>
                                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="taxidtype" class="mid">7. Tax Identification Type &nbsp; <span
                                                            style="color:red">*</span></label>
                                                                <select id="taxidtype" name="Tax Identification Type" class="form-control" >
                                                                  <option disabled selected>Select Tax Identification Type</option>
                                                                    <option>EIN</option>
                                                                    <option>SSN/ITIN</option>
                                                                    <option>Foriegn</option>
                                                                 </select>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="taxidnumber" class="mid">8. Tax Identification Number &nbsp; <span
                                                            style="color:red">*</span></label>
                                                        <input type="text" id="taxidnumber" class="form-control"
                                                            name="Tax Identification Number" placeholder="Enter Tax Identification Number" >
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="taxidcountryformation" class="mid">9. Country/Jurisdiction <small>(if foriegn tax ID only)</small></label>
                                                        <select id="taxidcountryformation" class="form-control form-select" name="Country/Jurisdiction" >
                                                            <option disabled selected>Select a country</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="CV">Cabo Verde</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="VA">Vatican City</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestine</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn Islands</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>                                            
                                                        </select>
                                                     </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Jurisdiction of formation of first registeration</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="accordion" id="accordion6">
                                                            <div class="accordion-item">
                                                              <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                                                  Need Help?
                                                                </button>
                                                              </h2>
                                                              <div id="collapseSix" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion6">
                                                                <div class="accordion-body">
                                                                   <p><b>Instructions for Item 10 - Jurisdiction of formation or first registration:</b></p>
                                                                   <p>Enter the country/jurisdiction of formation in item 10a. If United States is selected in 10a, then items 10b-10d should be completed, identifying the State or Tribal jurisdiction of formation. If a U.S. Territory is selected in 10a, then item 10b is automatically populated with the relevant U.S. Territory, and items 10c and 10d are unavailable. If Item 10a is a foreign country, then item 10e - 10f should be completed, identifying the State/U.S. Territory or Tribal jurisdiction in which the foreign reporting company first registered to do business in the United States. If the Tribal jurisdiction of formation (10c) or Tribal jurisdiction of first registration (10f) is not listed in the drop-down, select “Other” and enter the name of the Tribe in 10d or 10g.</p>
                                                                </div></div></div></div>
                                                                    </div>
                                                    <div class="col-lg-4">
                                                        <label for="countryformation" class="mid">10. a. Country/Jurisdiction of formation &nbsp; <span  style="color:red">*</span></label>
                                                        <select id="countryformation" class="form-control form-select" name="Country/Jurisdiction of formation" >
                                                            <option disabled selected>Select a country</option>
                                                            <option value="US">United States of America</option><option value="AS">American Samoa</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="FM">Micronesia, Federated States</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="VI">U.S. Virgin Islands</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                             <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="CV">Cabo Verde</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo</option>
                                                            <option value="CD">Congo, Democratic Republic of the</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="CI">Côte d'Ivoire</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="VA">Vatican City</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao</option>
                                                            <option value="MK">North Macedonia</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                             <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                             <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                             <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                             <option value="PS">Palestine</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn Islands</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                             <option value="QA">Qatar</option>
                                                            <option value="RE">Réunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SZ">Eswatini</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                             <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>                                            
                                                        </select>
                                                        
                                                     </div>
                                                    <div class="col-lg-2">
                                                        <label for="stateofformation" class="mid">b. State of first registration</label>
                                                            <select id="stateofformation" class="form-control"
                                                            name="State of first registration">
                                                            <option disabled selected>Select a state</option>
                                                            <option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option>
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
                                                        <label for="tribaljurisdiction" class="mid">c. Tribal Jurisdiction of formation</label>
                                                        <select id="tribaljurisdiction" class="form-control"
                                                        name="Tribal Jurisdiction of formation">
                                                        <option disabled selected>Select a Tribal Jurisdiction of formation</option>
                                                        <option value="Absentee-Shawnee">
                                                            Absentee-Shawnee Tribe of Indians of Oklahoma
                                                          </option>
                                                          <option value="Agdaagux">Agdaagux Tribe of King Cove</option>
                                                          <option value="Agua Caliente">
                                                            Agua Caliente Band of Cahuilla Indians of the Agua Caliente Indian
                                                            Reservation, California
                                                          </option>
                                                          <option value="Ak Chin">Ak-Chin Indian Community</option>
                                                          <option value="Akiachak">Akiachak Native Community</option>
                                                          <option value="Akiak">Akiak Native Community</option>
                                                          <option value="Alabama-Coushatta">Alabama-Coushatta Tribe of Texas</option>
                                                          <option value="Alabama-Quassarte Tribal Town">
                                                            Alabama-Quassarte Tribal Town
                                                          </option>
                                                          <option value="Alatna">Alatna Village</option>
                                                          <option value="Algaaciq">Algaaciq Native Village (St. Mary's)</option>
                                                          <option value="Allakaket">Allakaket Village</option>
                                                          <option value="Alturas">Alturas Indian Rancheria, California</option>
                                                          <option value="Alutiiq Tribe of Old Harbor">
                                                            Alutiiq Tribe of Old Harbor
                                                          </option>
                                                          <option value="Angoon">Angoon Community Association</option>
                                                          <option value="Anvik">Anvik Village</option>
                                                          <option value="Apache">Apache Tribe of Oklahoma</option>
                                                          <option value="Arctic Village">
                                                            Arctic Village (See Native Village of Venetie Tribal Government)
                                                          </option>
                                                          <option value="Asa'carsarmiut">Asa'carsarmiut Tribe</option>
                                                          <option value="Assiniboine and Sioux">
                                                            Assiniboine &amp; Sioux Tribes of the Fort Peck Indian Reservation, Montana
                                                          </option>
                                                          <option value="Augustine">
                                                            Augustine Band of Cahuilla Indians, California
                                                          </option>
                                                          <option value="Bad River Band">
                                                            Bad River Band of the Lake Superior Tribe of Chippewa Indians of the Bad
                                                            River Reservation, Wisconsin
                                                          </option>
                                                          <option value="Bay Mills">Bay Mills Indian Community, Michigan</option>
                                                          <option value="Bear River">
                                                            Bear River Band of the Rohnerville Rancheria, California
                                                          </option>
                                                          <option value="Beaver">Beaver Village</option>
                                                          <option value="Berry Creek">
                                                            Berry Creek Rancheria of Maidu Indians of California
                                                          </option>
                                                          <option value="Big Lagoon">Big Lagoon Rancheria, California</option>
                                                          <option value="Big Pine Reservation">
                                                            Big Pine Paiute Tribe of the Owens Valley
                                                          </option>
                                                          <option value="Big Sandy">
                                                            Big Sandy Rancheria of Western Mono Indians of California
                                                          </option>
                                                          <option value="Big Valley Rancheria">
                                                            Big Valley Band of Pomo Indians of the Big Valley Rancheria, California
                                                          </option>
                                                          <option value="Birch Creek">Birch Creek Tribe</option>
                                                          <option value="Bishop Paiute">Bishop Paiute Tribe</option>
                                                          <option value="Blackfeet">
                                                            Blackfeet Tribe of the Blackfeet Indian Reservation of Montana
                                                          </option>
                                                          <option value="Blue Lake">Blue Lake Rancheria, California</option>
                                                          <option value="Bridgeport Indian Colony">Bridgeport Indian Colony</option>
                                                          <option value="Buena Vista Rancheria">
                                                            Buena Vista Rancheria of Me-Wuk Indians of California
                                                          </option>
                                                          <option value="Burns Paiute">Burns Paiute Tribe</option>
                                                          <option value="Cabazon">Cabazon Band of Mission Indians, California</option>
                                                          <option value="Cachil DeHe">
                                                            Cachil DeHe Band of Wintun Indians of the Colusa Indian Community of the
                                                            Colusa Rancheria, California
                                                          </option>
                                                          <option value="Caddo">Caddo Nation of Oklahoma</option>
                                                          <option value="Cahto">Cahto Tribe of the Laytonville Rancheria</option>
                                                          <option value="Cahuilla">Cahuilla Band of Indians</option>
                                                          <option value="California Valley">
                                                            California Valley Miwok Tribe, California
                                                          </option>
                                                          <option value="Campo">
                                                            Campo Band of Diegueno Mission Indians of the Campo Indian Reservation,
                                                            California
                                                          </option>
                                                          <option value="Capitan Grande">
                                                            Capitan Grande Band of Diegueno Mission Indians of California (Barona Group
                                                            of Capitan Grande Band of Mission Indians of the Barona Reservation,
                                                            California)
                                                          </option>
                                                          <option value="Capitan Grande Band">
                                                            Capitan Grande Band of Diegueno Mission Indians of California
                                                          </option>
                                                          <option value="Viejas">
                                                            Capitan Grande Band of Diegueno Mission Indians of California: Viejas (Baron
                                                            Long) Group of Capitan Grande Band of Mission Indians of the Viejas
                                                            Reservation, California
                                                          </option>
                                                          <option value="Catawba">
                                                            Catawba Indian Nation (aka Catawba Indian Tribe of South Carolina)
                                                          </option>
                                                          <option value="Cayuga Nation of New York">Cayuga Nation</option>
                                                          <option value="Cedarville">Cedarville Rancheria, California</option>
                                                          <option value="Tlingit &amp; Haida">
                                                            Central Council of the Tlingit &amp; Haida Indian Tribes
                                                          </option>
                                                          <option value="Chalkyitsik">Chalkyitsik Village</option>
                                                          <option value="Cheesh-Na">Cheesh-Na Tribe</option>
                                                          <option value="Chemehuevi">
                                                            Chemehuevi Indian Tribe of the Chemehuevi Reservation, California
                                                          </option>
                                                          <option value="Cher-Ae Heights">
                                                            Cher-Ae Heights Indian Community of the Trinidad Rancheria, California
                                                          </option>
                                                          <option value="Cherokee Nation">Cherokee Nation</option>
                                                          <option value="Chevak">Chevak Native Village</option>
                                                          <option value="Cheyenne River">Cheyenne and Arapaho Tribes, Oklahoma</option>
                                                          <option value="Cheyenne River Sioux Tribe">
                                                            Cheyenne River Sioux Tribe of the Cheyenne River Reservation, South Dakota
                                                          </option>
                                                          <option value="Chickahominy Indians-Eastern Division">
                                                            Chickahominy Indian Tribe - Eastern Division
                                                          </option>
                                                          <option value="Chickahominy Indian Tribe, Inc.">
                                                            Chickahominy Indian Tribe
                                                          </option>
                                                          <option value="Chickaloon">Chickaloon Native Village</option>
                                                          <option value="Chicken Ranch">
                                                            Chicken Ranch Rancheria of Me-Wuk Indians of California
                                                          </option>
                                                          <option value="Chignik Bay">Chignik Bay Tribal Council</option>
                                                          <option value="Chignik Lake">Chignik Lake Village</option>
                                                          <option value="Chilkat">Chilkat Indian Village (Klukwan)</option>
                                                          <option value="Chilkoot">Chilkoot Indian Association (Haines)</option>
                                                          <option value="Chinik">Chinik Eskimo Community (Golovin)</option>
                                                          <option value="Chippewa-Cree">
                                                            Chippewa Cree Indians of the Rocky Boy's Reservation, Montana
                                                          </option>
                                                          <option value="Chitimacha">Chitimacha Tribe of Louisiana</option>
                                                          <option value="Chuloonawick">Chuloonawick Native Village</option>
                                                          <option value="Circle">Circle Native Community</option>
                                                          <option value="Citizen Potawatomi">
                                                            Citizen Potawatomi Nation, Oklahoma
                                                          </option>
                                                          <option value="Cloverdale">
                                                            Cloverdale Rancheria of Pomo Indians of California
                                                          </option>
                                                          <option value="Cocopah">Cocopah Tribe of Arizona</option>
                                                          <option value="Coeur D'Alene">Coeur D'Alene Tribe</option>
                                                          <option value="Cold Springs">
                                                            Cold Springs Rancheria of Mono Indians of California
                                                          </option>
                                                          <option value="Colorado River">
                                                            Colorado River Indian Tribes of the Colorado River Indian Reservation,
                                                            Arizona and California
                                                          </option>
                                                          <option value="Comanche">Comanche Nation, Oklahoma</option>
                                                          <option value="Confederated Salish">
                                                            Confederated Salish and Kootenai Tribes of the Flathead Reservation
                                                          </option>
                                                          <option value="Confederated Yakama">
                                                            Confederated Tribes and Bands of the Yakama Nation
                                                          </option>
                                                          <option value="Siletz Tribe">
                                                            Confederated Tribes of Siletz Indians of Oregon
                                                          </option>
                                                          <option value="Chehalis">
                                                            Confederated Tribes of the Chehalis Reservation
                                                          </option>
                                                          <option value="Confederated Colville">
                                                            Confederated Tribes of the Colville Reservation
                                                          </option>
                                                          <option value="Confederated Coos">
                                                            Confederated Tribes of the Coos, Lower Umpqua and Siuslaw Indians
                                                          </option>
                                                          <option value="Confederated Goshute">
                                                            Confederated Tribes of the Goshute Reservation, Nevada and Utah
                                                          </option>
                                                          <option value="Grand Ronde Tribes">
                                                            Confederated Tribes of the Grand Ronde Community of Oregon
                                                          </option>
                                                          <option value="Umatilla Tribe">
                                                            Confederated Tribes of the Umatilla Indian Reservation
                                                          </option>
                                                          <option value="Warms Springs Tribe">
                                                            Confederated Tribes of the Warm Springs Reservation of Oregon
                                                          </option>
                                                          <option value="Coquille">Coquille Indian Tribe</option>
                                                          <option value="Coushatta">Coushatta Tribe of Louisiana</option>
                                                          <option value="Cow Creek">Cow Creek Band of Umpqua Tribe of Indians</option>
                                                          <option value="Cowlitz">Cowlitz Indian Tribe</option>
                                                          <option value="Coyote Valley">
                                                            Coyote Valley Band of Pomo Indians of California
                                                          </option>
                                                          <option value="Craig">Craig Tribal Association</option>
                                                          <option value="Crow Creek">
                                                            Crow Creek Sioux Tribe of the Crow Creek Reservation, South Dakota
                                                          </option>
                                                          <option value="Crow">Crow Tribe of Montana</option>
                                                          <option value="Curyung">Curyung Tribal Council</option>
                                                          <option value="Delaware Nation">Delaware Nation, Oklahoma</option>
                                                          <option value="Delaware Tribe of Indians">Delaware Tribe of Indians</option>
                                                          <option value="Douglas">Douglas Indian Association</option>
                                                          <option value="Dry Creek">
                                                            Dry Creek Rancheria Band of Pomo Indians, California
                                                          </option>
                                                          <option value="Duckwater">
                                                            Duckwater Shoshone Tribe of the Duckwater Reservation, Nevada
                                                          </option>
                                                          <option value="Eastern Cherokee">Eastern Band of Cherokee Indians</option>
                                                          <option value="Eastern Shawnee Tribe of Oklahoma">
                                                            Eastern Shawnee Tribe of Oklahoma
                                                          </option>
                                                          <option value="Eastern Shoshone">
                                                            Eastern Shoshone Tribe of the Wind River Reservation, Wyoming
                                                          </option>
                                                          <option value="Egegik">Egegik Village</option>
                                                          <option value="Eklutna">Eklutna Native Village</option>
                                                          <option value="Elem">
                                                            Elem Indian Colony of Pomo Indians of the Sulphur Bank Rancheria, California
                                                          </option>
                                                          <option value="Elk Valley">Elk Valley Rancheria, California</option>
                                                          <option value="Ely Shoshone">Ely Shoshone Tribe of Nevada</option>
                                                          <option value="Emmonak">Emmonak Village</option>
                                                          <option value="Enterprise">
                                                            Enterprise Rancheria of Maidu Indians of California
                                                          </option>
                                                          <option value="Evansville">Evansville Village (aka Bettles Field)</option>
                                                          <option value="Ewiiaapaayp">
                                                            Ewiiaapaayp Band of Kumeyaay Indians, California
                                                          </option>
                                                          <option value="Federated Indians of Graton">
                                                            Federated Indians of Graton Rancheria, California
                                                          </option>
                                                          <option value="Flandreau">
                                                            Flandreau Santee Sioux Tribe of South Dakota
                                                          </option>
                                                          <option value="Forest County">
                                                            Forest County Potawatomi Community, Wisconsin
                                                          </option>
                                                          <option value="Assiniboine and Gros Ventre Tribes">
                                                            Fort Belknap Indian Community of the Fort Belknap Reservation of Montana
                                                          </option>
                                                          <option value="Fort Bidwell">
                                                            Fort Bidwell Indian Community of the Fort Bidwell Reservation of California
                                                          </option>
                                                          <option value="Fort Independence">
                                                            Fort Independence Indian Community of Paiute Indians of the Fort
                                                            Independence Reservation, California
                                                          </option>
                                                          <option value="Fort McDermitt">
                                                            Fort McDermitt Paiute and Shoshone Tribes of the Fort McDermitt Indian
                                                            Reservation, Nevada and Oregon
                                                          </option>
                                                          <option value="Fort McDowell">Fort McDowell Yavapai Nation, Arizona</option>
                                                          <option value="Fort Mojave">
                                                            Fort Mojave Indian Tribe of Arizona, California &amp; Nevada
                                                          </option>
                                                          <option value="Fort Sill">Fort Sill Apache Tribe of Oklahoma</option>
                                                          <option value="Galena">Galena Village (aka Louden Village)</option>
                                                          <option value="Gila River">
                                                            Gila River Indian Community of the Gila River Indian Reservation, Arizona
                                                          </option>
                                                          <option value="Grand Traverse">
                                                            Grand Traverse Band of Ottawa and Chippewa Indians, Michigan
                                                          </option>
                                                          <option value="Greenville">Greenville Rancheria</option>
                                                          <option value="Grindstone">
                                                            Grindstone Indian Rancheria of Wintun-Wailaki Indians of California
                                                          </option>
                                                          <option value="Guidiville">Guidiville Rancheria of California</option>
                                                          <option value="Gulkana">Gulkana Village Council</option>
                                                          <option value="Habematolel">
                                                            Habematolel Pomo of Upper Lake, California
                                                          </option>
                                                          <option value="Hannahville">Hannahville Indian Community, Michigan</option>
                                                          <option value="Havasupai">
                                                            Havasupai Tribe of the Havasupai Reservation, Arizona
                                                          </option>
                                                          <option value="Healy Lake">Healy Lake Village</option>
                                                          <option value="Ho-Chunk">Ho-Chunk Nation of Wisconsin</option>
                                                          <option value="Hoh">Hoh Indian Tribe</option>
                                                          <option value="Holy Cross">Holy Cross Tribe</option>
                                                          <option value="Hoonah">Hoonah Indian Association</option>
                                                          <option value="Hoopa">Hoopa Valley Tribe, California</option>
                                                          <option value="Hopi">Hopi Tribe of Arizona</option>
                                                          <option value="Hopland">Hopland Band of Pomo Indians, California</option>
                                                          <option value="Houlton">Houlton Band of Maliseet Indians</option>
                                                          <option value="Hualapai">
                                                            Hualapai Indian Tribe of the Hualapai Indian Reservation, Arizona
                                                          </option>
                                                          <option value="Hughes">Hughes Village</option>
                                                          <option value="Huslia">Huslia Village</option>
                                                          <option value="Hydaburg">Hydaburg Cooperative Association</option>
                                                          <option value="Igiugig">Igiugig Village</option>
                                                          <option value="Iipay">Iipay Nation of Santa Ysabel, California</option>
                                                          <option value="Inaja">
                                                            Inaja Band of Diegueno Mission Indians of the Inaja and Cosmit Reservation,
                                                            California
                                                          </option>
                                                          <option value="Inupiat Community of the Arctic Slope">
                                                            Inupiat Community of the Arctic Slope
                                                          </option>
                                                          <option value="Ione">Ione Band of Miwok Indians of California</option>
                                                          <option value="Iowa of Kansas">Iowa Tribe of Kansas and Nebraska</option>
                                                          <option value="Iowa of Oklahoma">Iowa Tribe of Oklahoma</option>
                                                          <option value="Iqugmiut">Iqugmiut Traditional Council</option>
                                                          <option value="Ivanof Bay Tribe">Ivanof Bay Tribe</option>
                                                          <option value="Jackson">Jackson Band of Miwuk Indians</option>
                                                          <option value="Jamestown">Jamestown S'Klallam Tribe</option>
                                                          <option value="Jamul">Jamul Indian Village of California</option>
                                                          <option value="Jena">Jena Band of Choctaw Indians</option>
                                                          <option value="Jicarilla">Jicarilla Apache Nation, New Mexico</option>
                                                          <option value="Kaguyuk">Kaguyak Village</option>
                                                          <option value="Kaibab">
                                                            Kaibab Band of Paiute Indians of the Kaibab Indian Reservation, Arizona
                                                          </option>
                                                          <option value="Kaktovik">Kaktovik Village (aka Barter Island)</option>
                                                          <option value="Kalispel">
                                                            Kalispel Indian Community of the Kalispel Reservation
                                                          </option>
                                                          <option value="Karuk">Karuk Tribe</option>
                                                          <option value="Kashia">
                                                            Kashia Band of Pomo Indians of the Stewarts Point Rancheria, California
                                                          </option>
                                                          <option value="Kasigluk">Kasigluk Traditional Elders Council</option>
                                                          <option value="Kaw">Kaw Nation, Oklahoma</option>
                                                          <option value="Kenaitze">Kenaitze Indian Tribe</option>
                                                          <option value="Ketchikan">Ketchikan Indian Community</option>
                                                          <option value="Keweenaw">Keweenaw Bay Indian Community, Michigan</option>
                                                          <option value="Kialegee Tribal Town">Kialegee Tribal Town</option>
                                                          <option value="Kickapoo of Texas">Kickapoo Traditional Tribe of Texas</option>
                                                          <option value="Kickapoo Tribe in Kansas">
                                                            Kickapoo Tribe of Indians of the Kickapoo Reservation in Kansas
                                                          </option>
                                                          <option value="Kickapoo of Oklahoma">Kickapoo Tribe of Oklahoma</option>
                                                          <option value="King Island">King Island Native Community</option>
                                                          <option value="King Salmon">King Salmon Tribe</option>
                                                          <option value="Kiowa Tribe">Kiowa Indian Tribe of Oklahoma</option>
                                                          <option value="Klamath">Klamath Tribes</option>
                                                          <option value="Klawock">Klawock Cooperative Association</option>
                                                          <option value="Cortina">Kletsel Dehe Band of Wintun Indians</option>
                                                          <option value="Knik">Knik Tribe</option>
                                                          <option value="Koi">Koi Nation of Northern California</option>
                                                          <option value="Kokhanok">Kokhanok Village</option>
                                                          <option value="Kootenai">Kootenai Tribe of Idaho</option>
                                                          <option value="Koyukuk">Koyukuk Native Village</option>
                                                          <option value="La Jolla">La Jolla Band of Luiseno Indians, California</option>
                                                          <option value="La Posta">
                                                            La Posta Band of Diegueno Mission Indians of the La Posta Indian
                                                            Reservation, California
                                                          </option>
                                                          <option value="Lac Courte Oreilles">
                                                            Lac Courte Oreilles Band of Lake Superior Chippewa Indians of Wisconsin
                                                          </option>
                                                          <option value="Lac du Flambeau">
                                                            Lac du Flambeau Band of Lake Superior Chippewa Indians of the Lac du
                                                            Flambeau Reservation of Wisconsin
                                                          </option>
                                                          <option value="Lac Vieux">
                                                            Lac Vieux Desert Band of Lake Superior Chippewa Indians of Michigan
                                                          </option>
                                                          <option value="Las Vegas">
                                                            Las Vegas Tribe of Paiute Indians of the Las Vegas Indian Colony, Nevada
                                                          </option>
                                                          <option value="Levelock">Levelock Village</option>
                                                          <option value="Lime">Lime Village</option>
                                                          <option value="Little River">
                                                            Little River Band of Ottawa Indians, Michigan
                                                          </option>
                                                          <option value="Little Shell Tribe">
                                                            Little Shell Tribe of Chippewa Indians of Montana
                                                          </option>
                                                          <option value="Little Traverse">
                                                            Little Traverse Bay Bands of Odawa Indians, Michigan
                                                          </option>
                                                          <option value="Lone Pine">Lone Pine Paiute-Shoshone Tribe</option>
                                                          <option value="Los Coyotes">
                                                            Los Coyotes Band of Cahuilla and Cupeno Indians, California
                                                          </option>
                                                          <option value="Lovelock">
                                                            Lovelock Paiute Tribe of the Lovelock Indian Colony, Nevada
                                                          </option>
                                                          <option value="Lower Brule">
                                                            Lower Brule Sioux Tribe of the Lower Brule Reservation, South Dakota
                                                          </option>
                                                          <option value="Lower Elwha">Lower Elwha Tribal Community</option>
                                                          <option value="Lower Sioux">
                                                            Lower Sioux Indian Community in the State of Minnesota
                                                          </option>
                                                          <option value="Lummi">Lummi Tribe of the Lummi Reservation</option>
                                                          <option value="Lytton">Lytton Rancheria of California</option>
                                                          <option value="Makah">
                                                            Makah Indian Tribe of the Makah Indian Reservation
                                                          </option>
                                                          <option value="Manchester">
                                                            Manchester Band of Pomo Indians of the Manchester Rancheria, California
                                                          </option>
                                                          <option value="Manley Hot Springs">Manley Hot Springs Village</option>
                                                          <option value="Manokotak">Manokotak Village</option>
                                                          <option value="Manzanita">
                                                            Manzanita Band of Diegueno Mission Indians of the Manzanita Reservation,
                                                            California
                                                          </option>
                                                          <option value="Mashantucket Pequot">Mashantucket Pequot Indian Tribe</option>
                                                          <option value="Mashpee">Mashpee Wampanoag Tribe</option>
                                                          <option value="Match-e-be-nash-she-wish Band">
                                                            Match-e-be-nash-she-wish Band of Pottawatomi Indians of Michigan
                                                          </option>
                                                          <option value="Mcgrath">McGrath Native Village</option>
                                                          <option value="Mechoopda">
                                                            Mechoopda Indian Tribe of Chico Rancheria, California
                                                          </option>
                                                          <option value="Menominee">Menominee Indian Tribe of Wisconsin</option>
                                                          <option value="Mentasta">Mentasta Traditional Council</option>
                                                          <option value="Mesa Grande">
                                                            Mesa Grande Band of Diegueno Mission Indians of the Mesa Grande Reservation,
                                                            California
                                                          </option>
                                                          <option value="Mescalero Apache">
                                                            Mescalero Apache Tribe of the Mescalero Reservation, New Mexico
                                                          </option>
                                                          <option value="Metlakatla">
                                                            Metlakatla Indian Community, Annette Island Reserve
                                                          </option>
                                                          <option value="Miami Tribe of Oklahoma">Miami Tribe of Oklahoma</option>
                                                          <option value="Miccosukee">Miccosukee Tribe of Indians</option>
                                                          <option value="Middletown">
                                                            Middletown Rancheria of Pomo Indians of California
                                                          </option>
                                                          <option value="Mi'kmaq Nation">Mi'kmaq Nation</option>
                                                          <option value="Bois Forte">
                                                            Minnesota Chippewa Tribe - Bois Forte Band (Nett Lake)
                                                          </option>
                                                          <option value="Fond du Lac">
                                                            Minnesota Chippewa Tribe - Fond du Lac Band
                                                          </option>
                                                          <option value="Grand Portage">
                                                            Minnesota Chippewa Tribe - Grand Portage Band
                                                          </option>
                                                          <option value="Leech Lake">Minnesota Chippewa Tribe - Leech Lake Band</option>
                                                          <option value="Mille Lacs">Minnesota Chippewa Tribe - Mille Lacs Band</option>
                                                          <option value="White Earth">
                                                            Minnesota Chippewa Tribe - White Earth Band
                                                          </option>
                                                          <option value="Minnesota Chippewa">
                                                            Minnesota Chippewa Tribe, Minnesota
                                                          </option>
                                                          <option value="Mississippi Choctaw">
                                                            Mississippi Band of Choctaw Indians
                                                          </option>
                                                          <option value="Moapa">
                                                            Moapa Band of Paiute Indians of the Moapa River Indian Reservation, Nevada
                                                          </option>
                                                          <option value="Modoc Nation">Modoc Nation</option>
                                                          <option value="Mohegan">Mohegan Tribe of Indians of Connecticut</option>
                                                          <option value="Monacan Indian Nation">Monacan Indian Nation</option>
                                                          <option value="Mooretown">
                                                            Mooretown Rancheria of Maidu Indians of California
                                                          </option>
                                                          <option value="Morongo">Morongo Band of Mission Indians, California</option>
                                                          <option value="Muckleshoot">Muckleshoot Indian Tribe</option>
                                                          <option value="Naknek">Naknek Native Village</option>
                                                          <option value="Nansemond Indian Tribe">Nansemond Indian Nation</option>
                                                          <option value="Narragansett">Narragansett Indian Tribe</option>
                                                          <option value="Afognak">Native Village of Afognak</option>
                                                          <option value="Akhiok">Native Village of Akhiok</option>
                                                          <option value="Akutan">Native Village of Akutan</option>
                                                          <option value="Aleknagik">Native Village of Aleknagik</option>
                                                          <option value="Ambler">Native Village of Ambler</option>
                                                          <option value="Atka">Native Village of Atka</option>
                                                          <option value="Native Village of Atqasuk">Native Village of Atqasuk</option>
                                                          <option value="Barrow">
                                                            Native Village of Barrow Inupiat Traditional Government
                                                          </option>
                                                          <option value="Belkofski">Native Village of Belkofski</option>
                                                          <option value="Brevig Mission">Native Village of Brevig Mission</option>
                                                          <option value="Buckland">Native Village of Buckland</option>
                                                          <option value="Cantwell">Native Village of Cantwell</option>
                                                          <option value="Chenega">Native Village of Chenega (aka Chanega)</option>
                                                          <option value="Chignik Lagoon">Native Village of Chignik Lagoon</option>
                                                          <option value="Chitina">Native Village of Chitina</option>
                                                          <option value="Chuathbaluk">
                                                            Native Village of Chuathbaluk (Russian Mission, Kuskokwim)
                                                          </option>
                                                          <option value="Council">Native Village of Council</option>
                                                          <option value="Deering">Native Village of Deering</option>
                                                          <option value="Diomede">Native Village of Diomede (aka Inalik)</option>
                                                          <option value="Eagle">Native Village of Eagle</option>
                                                          <option value="Eek">Native Village of Eek</option>
                                                          <option value="Ekuk">Native Village of Ekuk</option>
                                                          <option value="Ekwok">Native Village of Ekwok</option>
                                                          <option value="Elim IRA">Native Village of Elim</option>
                                                          <option value="Eyak">Native Village of Eyak (Cordova)</option>
                                                          <option value="False Pass">Native Village of False Pass</option>
                                                          <option value="Fort Yukon">Native Village of Fort Yukon</option>
                                                          <option value="Gakona">Native Village of Gakona</option>
                                                          <option value="Gambell">Native Village of Gambell</option>
                                                          <option value="Georgetown">Native Village of Georgetown</option>
                                                          <option value="Goodnews Bay">Native Village of Goodnews Bay</option>
                                                          <option value="Hamilton">Native Village of Hamilton</option>
                                                          <option value="Hooper Bay">Native Village of Hooper Bay</option>
                                                          <option value="Kanatak">Native Village of Kanatak</option>
                                                          <option value="Karluk">Native Village of Karluk</option>
                                                          <option value="Kiana">Native Village of Kiana</option>
                                                          <option value="Kipnuk">Native Village of Kipnuk</option>
                                                          <option value="Kivalina">Native Village of Kivalina</option>
                                                          <option value="Kluti Kaah">
                                                            Native Village of Kluti Kaah (aka Copper Center)
                                                          </option>
                                                          <option value="Kobuk">Native Village of Kobuk</option>
                                                          <option value="Kongiganak">Native Village of Kongiganak</option>
                                                          <option value="Kotzebue">Native Village of Kotzebue</option>
                                                          <option value="Koyuk">Native Village of Koyuk</option>
                                                          <option value="Kwigillingok">Native Village of Kwigillingok</option>
                                                          <option value="Kwinhagak">Native Village of Kwinhagak (aka Quinhagak)</option>
                                                          <option value="Larsen Bay">Native Village of Larsen Bay</option>
                                                          <option value="Marshall">
                                                            Native Village of Marshall (aka Fortuna Ledge)
                                                          </option>
                                                          <option value="Mary's Igloo">Native Village of Mary's Igloo</option>
                                                          <option value="Mekoryuk">Native Village of Mekoryuk</option>
                                                          <option value="Minto">Native Village of Minto</option>
                                                          <option value="Nanwalek">Native Village of Nanwalek (aka English Bay)</option>
                                                          <option value="Napaimute">Native Village of Napaimute</option>
                                                          <option value="Napakiak">Native Village of Napakiak</option>
                                                          <option value="Napaskiak">Native Village of Napaskiak</option>
                                                          <option value="Nelson Lagoon">Native Village of Nelson Lagoon</option>
                                                          <option value="Nightmute">Native Village of Nightmute</option>
                                                          <option value="Nikolski">Native Village of Nikolski</option>
                                                          <option value="Noatak">Native Village of Noatak</option>
                                                          <option value="Nuiqsut">Native Village of Nuiqsut (aka Nooiksut)</option>
                                                          <option value="Nunam Iqua">Native Village of Nunam Iqua</option>
                                                          <option value="Nunapitchuk">Native Village of Nunapitchuk</option>
                                                          <option value="Ouzinkie">Native Village of Ouzinkie</option>
                                                          <option value="Paimiut">Native Village of Paimiut</option>
                                                          <option value="Perryville">Native Village of Perryville</option>
                                                          <option value="Pilot Point">Native Village of Pilot Point</option>
                                                          <option value="Point Hope IRA">Native Village of Point Hope</option>
                                                          <option value="Point Lay IRA">Native Village of Point Lay</option>
                                                          <option value="Port Graham">Native Village of Port Graham</option>
                                                          <option value="Port Heiden">Native Village of Port Heiden</option>
                                                          <option value="Port Lions">Native Village of Port Lions</option>
                                                          <option value="Ruby">Native Village of Ruby</option>
                                                          <option value="St. Michael IRA">Native Village of Saint Michael</option>
                                                          <option value="Savoonga">Native Village of Savoonga</option>
                                                          <option value="Scammon Bay">Native Village of Scammon Bay</option>
                                                          <option value="Selawik">Native Village of Selawik</option>
                                                          <option value="Shaktoolik">Native Village of Shaktoolik</option>
                                                          <option value="Shishmaref IRA">Native Village of Shishmaref</option>
                                                          <option value="Shungnak">Native Village of Shungnak</option>
                                                          <option value="Stevens Village">Native Village of Stevens</option>
                                                          <option value="Tanacross">Native Village of Tanacross</option>
                                                          <option value="Tanana">Native Village of Tanana</option>
                                                          <option value="Tatitlek">Native Village of Tatitlek</option>
                                                          <option value="Tazlina">Native Village of Tazlina</option>
                                                          <option value="Teller">Native Village of Teller</option>
                                                          <option value="Tetlin">Native Village of Tetlin</option>
                                                          <option value="Tuntutuliak">Native Village of Tuntutuliak</option>
                                                          <option value="Tununak">Native Village of Tununak</option>
                                                          <option value="Tyonek">Native Village of Tyonek</option>
                                                          <option value="Unalakleet">Native Village of Unalakleet</option>
                                                          <option value="Unga">Native Village of Unga</option>
                                                          <option value="Venetie IRA">
                                                            Native Village of Venetie Tribal Government (Arctic Village and Village of
                                                            Venetie)
                                                          </option>
                                                          <option value="Wales">Native Village of Wales</option>
                                                          <option value="White Mountain AK">Native Village of White Mountain</option>
                                                          <option value="Navajo">Navajo Nation, Arizona, New Mexico &amp; Utah</option>
                                                          <option value="Nenana">Nenana Native Association</option>
                                                          <option value="New Koliganek">New Koliganek Village Council</option>
                                                          <option value="New Stuyahok">New Stuyahok Village</option>
                                                          <option value="Newhalen">Newhalen Village</option>
                                                          <option value="Newtok">Newtok Village</option>
                                                          <option value="Nez Perce">Nez Perce Tribe</option>
                                                          <option value="Nikolai">Nikolai Village</option>
                                                          <option value="Ninilchik">Ninilchik Village</option>
                                                          <option value="Nisqually">Nisqually Indian Tribe</option>
                                                          <option value="Nome">Nome Eskimo Community</option>
                                                          <option value="Nondalton">Nondalton Village</option>
                                                          <option value="Nooksack">Nooksack Indian Tribe</option>
                                                          <option value="Noorvik">Noorvik Native Community</option>
                                                          <option value="Northern Arapaho">
                                                            Northern Arapaho Tribe of the Wind River Reservation, Wyoming
                                                          </option>
                                                          <option value="Northern Cheyenne">
                                                            Northern Cheyenne Tribe of the Northern Cheyenne Indian Reservation, Montana
                                                          </option>
                                                          <option value="North Fork">
                                                            Northfork Rancheria of Mono Indians of California
                                                          </option>
                                                          <option value="Northway">Northway Village</option>
                                                          <option value="Northwestern Shoshone">
                                                            Northwestern Band of the Shoshone Nation
                                                          </option>
                                                          <option value="Nottawaseppi Potawatomi">
                                                            Nottawaseppi Huron Band of the Potawatomi, Michigan
                                                          </option>
                                                          <option value="Nulato">Nulato Village</option>
                                                          <option value="Nunakauyarmiut">Nunakauyarmiut Tribe</option>
                                                          <option value="Oglala Sioux">Oglala Sioux Tribe</option>
                                                          <option value="Ohkay Owingeh">Ohkay Owingeh, New Mexico</option>
                                                          <option value="Omaha">Omaha Tribe of Nebraska</option>
                                                          <option value="Oneida">Oneida Indian Nation</option>
                                                          <option value="Oneida Nation (Wisconsin)">Oneida Nation</option>
                                                          <option value="Onondaga">Onondaga Nation</option>
                                                          <option value="Grayling">
                                                            Organized Village of Grayling (aka Holikachuk)
                                                          </option>
                                                          <option value="Kake">Organized Village of Kake</option>
                                                          <option value="Kasaan">Organized Village of Kasaan</option>
                                                          <option value="Kwethluk">Organized Village of Kwethluk</option>
                                                          <option value="Saxman">Organized Village of Saxman</option>
                                                          <option value="Orutsararmiut">
                                                            Orutsararmiut Traditional Native Council
                                                          </option>
                                                          <option value="Oscarville">Oscarville Traditional Village</option>
                                                          <option value="Otoe-Missouria">
                                                            Otoe-Missouria Tribe of Indians, Oklahoma
                                                          </option>
                                                          <option value="Ottawa Tribe of Oklahoma">Ottawa Tribe of Oklahoma</option>
                                                          <option value="Paiute of Utah">
                                                            Paiute Indian Tribe of Utah (Cedar Band of Paiutes, Kanosh Band of Paiutes,
                                                            Koosharem Band of Paiutes, Indian Peaks Band of Paiutes, and Shivwits Band
                                                            of Paiutes)
                                                          </option>
                                                          <option value="Paiute-Shoshone">
                                                            Paiute-Shoshone Tribe of the Fallon Reservation and Colony, Nevada
                                                          </option>
                                                          <option value="Pala">Pala Band of Mission Indians</option>
                                                          <option value="Pamunkey Indian Tribe">Pamunkey Indian Tribe</option>
                                                          <option value="Pascua Yaqui">Pascua Yaqui Tribe of Arizona</option>
                                                          <option value="Paskenta">
                                                            Paskenta Band of Nomlaki Indians of California
                                                          </option>
                                                          <option value="Passamaquoddy Indian Township">
                                                            Passamaquoddy Tribe - Indian Township
                                                          </option>
                                                          <option value="Passamaquoddy Pleasant Point">
                                                            Passamaquoddy Tribe - Pleasant Point
                                                          </option>
                                                          <option value="Passamaquoddy Tribe">Passamaquoddy Tribe</option>
                                                          <option value="Pauloff Harbor">Pauloff Harbor Village</option>
                                                          <option value="Pauma">
                                                            Pauma Band of Luiseno Mission Indians of the Pauma &amp; Yuima Reservation,
                                                            California
                                                          </option>
                                                          <option value="Pawnee">Pawnee Nation of Oklahoma</option>
                                                          <option value="Pechanga Band of Indians">Pechanga Band of Indians</option>
                                                          <option value="Pedro Bay">Pedro Bay Village</option>
                                                          <option value="Penobscot">Penobscot Nation</option>
                                                          <option value="Peoria Tribe of Indians of Oklahoma">
                                                            Peoria Tribe of Indians of Oklahoma
                                                          </option>
                                                          <option value="Petersburg">Petersburg Indian Association</option>
                                                          <option value="Picayune">
                                                            Picayune Rancheria of Chukchansi Indians of California
                                                          </option>
                                                          <option value="Pilot Station">Pilot Station Traditional Village</option>
                                                          <option value="Pinoleville">Pinoleville Pomo Nation, California</option>
                                                          <option value="Pit River">Pit River Tribe, California</option>
                                                          <option value="Pitka's Point">Pitka's Point Traditional Council</option>
                                                          <option value="Platinum">Platinum Traditional Village</option>
                                                          <option value="Poarch">Poarch Band of Creek Indians</option>
                                                          <option value="Pokagon">
                                                            Pokagon Band of Potawatomi Indians, Michigan and Indiana
                                                          </option>
                                                          <option value="Ponca of Oklahoma">Ponca Tribe of Indians of Oklahoma</option>
                                                          <option value="Ponca of Nebraska">Ponca Tribe of Nebraska</option>
                                                          <option value="Port Gamble">Port Gamble S'Klallam Tribe</option>
                                                          <option value="Portage Creek">Portage Creek Village (aka Ohgsenakale)</option>
                                                          <option value="Potter Valley">Potter Valley Tribe, California</option>
                                                          <option value="Prairie Band">Prairie Band Potawatomi Nation</option>
                                                          <option value="Prairie Island">
                                                            Prairie Island Indian Community in the State of Minnesota
                                                          </option>
                                                          <option value="Pribilof Islands Aleut Communities">
                                                            Pribilof Islands Aleut Communities
                                                          </option>
                                                          <option value="Pueblo of Acoma">Pueblo of Acoma, New Mexico</option>
                                                          <option value="Pueblo of Cochiti">Pueblo of Cochiti, New Mexico</option>
                                                          <option value="Pueblo of Isleta">Pueblo of Isleta, New Mexico</option>
                                                          <option value="Pueblo of Jemez">Pueblo of Jemez, New Mexico</option>
                                                          <option value="Pueblo of Laguna">Pueblo of Laguna, New Mexico</option>
                                                          <option value="Pueblo of Nambe">Pueblo of Nambe, New Mexico</option>
                                                          <option value="Pueblo of Picuris">Pueblo of Picuris, New Mexico</option>
                                                          <option value="Pueblo of Pojoaque">Pueblo of Pojoaque, New Mexico</option>
                                                          <option value="Pueblo of San Felipe">Pueblo of San Felipe, New Mexico</option>
                                                          <option value="Pueblo of San Ildefonso">
                                                            Pueblo of San Ildefonso, New Mexico
                                                          </option>
                                                          <option value="Pueblo of Sandia">Pueblo of Sandia, New Mexico</option>
                                                          <option value="Pueblo of Santa Ana">Pueblo of Santa Ana, New Mexico</option>
                                                          <option value="Pueblo of Santa Clara">
                                                            Pueblo of Santa Clara, New Mexico
                                                          </option>
                                                          <option value="Pueblo of Taos">Pueblo of Taos, New Mexico</option>
                                                          <option value="Pueblo of Tesuque">Pueblo of Tesuque, New Mexico</option>
                                                          <option value="Pueblo of Zia">Pueblo of Zia, New Mexico</option>
                                                          <option value="Puyallup">Puyallup Tribe of the Puyallup Reservation</option>
                                                          <option value="Pyramid Lake">
                                                            Pyramid Lake Paiute Tribe of the Pyramid Lake Reservation, Nevada
                                                          </option>
                                                          <option value="Qagan Tayagungin">Qagan Tayagungin Tribe of Sand Point</option>
                                                          <option value="Qawalangin">Qawalangin Tribe of Unalaska</option>
                                                          <option value="Quapaw Nation">Quapaw Nation</option>
                                                          <option value="Quartz Valley">
                                                            Quartz Valley Indian Community of the Quartz Valley Reservation of
                                                            California
                                                          </option>
                                                          <option value="Quechan">
                                                            Quechan Tribe of the Fort Yuma Indian Reservation, California &amp; Arizona
                                                          </option>
                                                          <option value="Quileute">Quileute Tribe of the Quileute Reservation</option>
                                                          <option value="Quinault">Quinault Indian Nation</option>
                                                          <option value="Ramah Navajo Chapter">
                                                            Ramah Navajo Chapter of the Navajo Nation
                                                          </option>
                                                          <option value="Ramona">Ramona Band of Cahuilla, California</option>
                                                          <option value="Rampart">Rampart Village</option>
                                                          <option value="Rappahannock Tribe, Inc.">Rappahannock Tribe, Inc.</option>
                                                          <option value="Red Cliff">
                                                            Red Cliff Band of Lake Superior Chippewa Indians of Wisconsin
                                                          </option>
                                                          <option value="Red Lake">Red Lake Band of Chippewa Indians, Minnesota</option>
                                                          <option value="Redding">Redding Rancheria, California</option>
                                                          <option value="Redwood Valley">
                                                            Redwood Valley or Little River Band of Pomo Indians of the Redwood Valley
                                                            Rancheria California
                                                          </option>
                                                          <option value="Reno-Sparks">Reno-Sparks Indian Colony, Nevada</option>
                                                          <option value="Resighini">Resighini Rancheria, California</option>
                                                          <option value="Rincon">
                                                            Rincon Band of Luiseno Mission Indians of the Rincon Reservation, California
                                                          </option>
                                                          <option value="Robinson">Robinson Rancheria</option>
                                                          <option value="Rosebud">
                                                            Rosebud Sioux Tribe of the Rosebud Indian Reservation, South Dakota
                                                          </option>
                                                          <option value="Round Valley">
                                                            Round Valley Indian Tribes, Round Valley Reservation, California
                                                          </option>
                                                          <option value="Sac &amp; Fox Nation of Missouri in Kansas and Nebraska">
                                                            Sac &amp; Fox Nation of Missouri in Kansas and Nebraska
                                                          </option>
                                                          <option value="Sac &amp; Fox Nation, Oklahoma">
                                                            Sac &amp; Fox Nation, Oklahoma
                                                          </option>
                                                          <option value="Sac &amp; Fox of Mississippi">
                                                            Sac &amp; Fox Tribe of the Mississippi in Iowa
                                                          </option>
                                                          <option value="Saginaw Chippewa">
                                                            Saginaw Chippewa Indian Tribe of Michigan
                                                          </option>
                                                          <option value="St. George">
                                                            Saint George Island (See Pribilof Islands Aleut Communities of St. Paul
                                                            &amp; St. George Islands)
                                                          </option>
                                                          <option value="Saint Paul">
                                                            Saint Paul Island (See Pribilof Islands Aleut Communities of St. Paul &amp;
                                                            St. George Islands)
                                                          </option>
                                                          <option value="Saint Regis">Saint Regis Mohawk Tribe</option>
                                                          <option value="Salamatof">Salamatof Tribe</option>
                                                          <option value="Salt River">
                                                            Salt River Pima-Maricopa Indian Community of the Salt River Reservation,
                                                            Arizona
                                                          </option>
                                                          <option value="Samish">Samish Indian Nation</option>
                                                          <option value="San Carlos">
                                                            San Carlos Apache Tribe of the San Carlos Reservation, Arizona
                                                          </option>
                                                          <option value="San Juan">San Juan Southern Paiute Tribe of Arizona</option>
                                                          <option value="San Pasqual">
                                                            San Pasqual Band of Diegueno Mission Indians of California
                                                          </option>
                                                          <option value="Santa Rosa of Cahuilla">
                                                            Santa Rosa Band of Cahuilla Indians, California
                                                          </option>
                                                          <option value="Santa Rosa">
                                                            Santa Rosa Indian Community of the Santa Rosa Rancheria, California
                                                          </option>
                                                          <option value="Santa Ynez">
                                                            Santa Ynez Band of Chumash Mission Indians of the Santa Ynez Reservation,
                                                            California
                                                          </option>
                                                          <option value="Santee Sioux">Santee Sioux Nation, Nebraska</option>
                                                          <option value="Santo Domingo">Santo Domingo Pueblo</option>
                                                          <option value="Sauk-Suiattle">Sauk-Suiattle Indian Tribe</option>
                                                          <option value="Sault Ste. Marie">
                                                            Sault Ste. Marie Tribe of Chippewa Indians, Michigan
                                                          </option>
                                                          <option value="Scotts Valley">
                                                            Scotts Valley Band of Pomo Indians of California
                                                          </option>
                                                          <option value="Seldovia">Seldovia Village Tribe</option>
                                                          <option value="Seminole">Seminole Tribe of Florida</option>
                                                          <option value="Seneca">Seneca Nation of Indians</option>
                                                          <option value="Seneca-Cayuga Nation">Seneca-Cayuga Nation</option>
                                                          <option value="Shageluk">Shageluk Native Village</option>
                                                          <option value="Shakopee">
                                                            Shakopee Mdewakanton Sioux Community of Minnesota
                                                          </option>
                                                          <option value="Shawnee Tribe">Shawnee Tribe</option>
                                                          <option value="Sherwood Valley">
                                                            Sherwood Valley Rancheria of Pomo Indians of California
                                                          </option>
                                                          <option value="Shingle Springs">
                                                            Shingle Springs Band of Miwok Indians, Shingle Springs Rancheria (Verona
                                                            Tract), California
                                                          </option>
                                                          <option value="Shinnecock">Shinnecock Indian Nation</option>
                                                          <option value="Shoalwater">
                                                            Shoalwater Bay Indian Tribe of the Shoalwater Bay Indian Reservation
                                                          </option>
                                                          <option value="Shoshone-Bannock">
                                                            Shoshone-Bannock Tribes of the Fort Hall Reservation
                                                          </option>
                                                          <option value="Shoshone-Paiute">
                                                            Shoshone-Paiute Tribes of the Duck Valley Reservation, Nevada
                                                          </option>
                                                          <option value="Sisseton-Wahpeton">
                                                            Sisseton-Wahpeton Oyate of the Lake Traverse Reservation, South Dakota
                                                          </option>
                                                          <option value="Sitka">Sitka Tribe of Alaska</option>
                                                          <option value="Skagway">Skagway Village</option>
                                                          <option value="Skokomish">Skokomish Indian Tribe</option>
                                                          <option value="Skull Valley">
                                                            Skull Valley Band of Goshute Indians of Utah
                                                          </option>
                                                          <option value="Snoqualmie">Snoqualmie Indian Tribe</option>
                                                          <option value="Soboba">Soboba Band of Luiseno Indians, California</option>
                                                          <option value="Sokaogon">Sokaogon Chippewa Community, Wisconsin</option>
                                                          <option value="South Naknek">South Naknek Village</option>
                                                          <option value="Southern Ute">
                                                            Southern Ute Indian Tribe of the Southern Ute Reservation, Colorado
                                                          </option>
                                                          <option value="Spirit Lake">Spirit Lake Tribe, North Dakota</option>
                                                          <option value="Spokane">Spokane Tribe of the Spokane Reservation</option>
                                                          <option value="Squaxin">
                                                            Squaxin Island Tribe of the Squaxin Island Reservation
                                                          </option>
                                                          <option value="St. Croix">St. Croix Chippewa Indians of Wisconsin</option>
                                                          <option value="Standing Rock">
                                                            Standing Rock Sioux Tribe of North &amp; South Dakota
                                                          </option>
                                                          <option value="Stebbins">Stebbins Community Association</option>
                                                          <option value="Stillaguamish">
                                                            Stillaguamish Tribe of Indians of Washington
                                                          </option>
                                                          <option value="Stockbridge">Stockbridge Munsee Community, Wisconsin</option>
                                                          <option value="Summit Lake">Summit Lake Paiute Tribe of Nevada</option>
                                                          <option value="Sun'aq">Sun'aq Tribe of Kodiak</option>
                                                          <option value="Suquamish">
                                                            Suquamish Indian Tribe of the Port Madison Reservation
                                                          </option>
                                                          <option value="Susanville">Susanville Indian Rancheria, California</option>
                                                          <option value="Swinomish">Swinomish Indian Tribal Community</option>
                                                          <option value="Sycuan">Sycuan Band of the Kumeyaay Nation</option>
                                                          <option value="Table Mountain">Table Mountain Rancheria</option>
                                                          <option value="Takotna">Takotna Village</option>
                                                          <option value="Tangirnaq">Tangirnaq Native Village</option>
                                                          <option value="Tejon">Tejon Indian Tribe</option>
                                                          <option value="Telida">Telida Village</option>
                                                          <option value="Te-Moak">
                                                            Te-Moak Tribe of Western Shoshone Indians of Nevada (Four constituent bands:
                                                            Battle Mountain Band; Elko Band; South Fork Band and Wells Band)
                                                          </option>
                                                          <option value="Chickasaw Nation">The Chickasaw Nation</option>
                                                          <option value="The Choctaw Nation of Oklahoma">
                                                            The Choctaw Nation of Oklahoma
                                                          </option>
                                                          <option value="The Muscogee (Creek) Nation">
                                                            The Muscogee (Creek) Nation
                                                          </option>
                                                          <option value="The Osage Nation">The Osage Nation</option>
                                                          <option value="The Seminole Nation  of Oklahoma">
                                                            The Seminole Nation of Oklahoma
                                                          </option>
                                                          <option value="Thlopthlocco Tribal Town">Thlopthlocco Tribal Town</option>
                                                          <option value="Three Affiliated">
                                                            Three Affiliated Tribes of the Fort Berthold Reservation, North Dakota
                                                          </option>
                                                          <option value="Timbi-sha Shoshone">Timbisha Shoshone Tribe</option>
                                                          <option value="Tohono O'odham">Tohono O'odham Nation of Arizona</option>
                                                          <option value="Tolowa Dee-ni'">Tolowa Dee-ni' Nation</option>
                                                          <option value="Tonawanda">Tonawanda Band of Seneca</option>
                                                          <option value="Tonkawa">Tonkawa Tribe of Indians of Oklahoma</option>
                                                          <option value="Tonto Apache">Tonto Apache Tribe of Arizona</option>
                                                          <option value="Torres Martinez">
                                                            Torres Martinez Desert Cahuilla Indians, California
                                                          </option>
                                                          <option value="Togiak">Traditional Village of Togiak</option>
                                                          <option value="Tulalip">Tulalip Tribes of Washington</option>
                                                          <option value="Tule River">
                                                            Tule River Indian Tribe of the Tule River Reservation, California
                                                          </option>
                                                          <option value="Tuluksak">Tuluksak Native Community</option>
                                                          <option value="Tunica-Biloxi">Tunica-Biloxi Indian Tribe</option>
                                                          <option value="Tuolumne">
                                                            Tuolumne Band of Me-Wuk Indians of the Tuolumne Rancheria of California
                                                          </option>
                                                          <option value="Turtle Mountain">
                                                            Turtle Mountain Band of Chippewa Indians of North Dakota
                                                          </option>
                                                          <option value="Tuscarora">Tuscarora Nation</option>
                                                          <option value="Twenty-Nine Palms">
                                                            Twenty-Nine Palms Band of Mission Indians of California
                                                          </option>
                                                          <option value="Twin Hills">Twin Hills Village</option>
                                                          <option value="Ugashik">Ugashik Village</option>
                                                          <option value="Umkumiut">Umkumiut Native Village</option>
                                                          <option value="United Auburn">
                                                            United Auburn Indian Community of the Auburn Rancheria of California
                                                          </option>
                                                          <option value="United Keetoowah Band of Cherokee Indians in Oklahoma">
                                                            United Keetoowah Band of Cherokee Indians in Oklahoma
                                                          </option>
                                                          <option value="Upper Mattaponi Tribe">Upper Mattaponi Tribe</option>
                                                          <option value="Upper Sioux">Upper Sioux Community, Minnesota</option>
                                                          <option value="Upper Skagit">Upper Skagit Indian Tribe</option>
                                                          <option value="Ute">
                                                            Ute Indian Tribe of the Uintah &amp; Ouray Reservation, Utah
                                                          </option>
                                                          <option value="Ute Mountain Ute">Ute Mountain Ute Tribe</option>
                                                          <option value="Benton">
                                                            Utu Utu Gwaitu Paiute Tribe of the Benton Paiute Reservation, California
                                                          </option>
                                                          <option value="Alakanuk">Village of Alakanuk</option>
                                                          <option value="Anaktuvuk Pass">Village of Anaktuvuk Pass</option>
                                                          <option value="Aniak">Village of Aniak</option>
                                                          <option value="Atmautluak">Village of Atmautluak</option>
                                                          <option value="Bill Moore's Slough">Village of Bill Moore's Slough</option>
                                                          <option value="Chefornak">Village of Chefornak</option>
                                                          <option value="Clark's Point">Village of Clarks Point</option>
                                                          <option value="Crooked Creek">Village of Crooked Creek</option>
                                                          <option value="Dot Lake">Village of Dot Lake</option>
                                                          <option value="Iliamna">Village of Iliamna</option>
                                                          <option value="Kalskag">Village of Kalskag</option>
                                                          <option value="Kaltag">Village of Kaltag</option>
                                                          <option value="Kotlik">Village of Kotlik</option>
                                                          <option value="Lower Kalskag">Village of Lower Kalskag</option>
                                                          <option value="Ohogamiut">Village of Ohogamiut</option>
                                                          <option value="Red Devil">Village of Red Devil</option>
                                                          <option value="Sleetmute">Village of Sleetmute</option>
                                                          <option value="Solomon">Village of Solomon</option>
                                                          <option value="Stony River">Village of Stony River</option>
                                                          <option value="Venetie">
                                                            Village of Venetie (See Native Village of Venetie Tribal Government)
                                                          </option>
                                                          <option value="Wainwright">Village of Wainwright</option>
                                                          <option value="Walker River">
                                                            Walker River Paiute Tribe of the Walker River Reservation, Nevada
                                                          </option>
                                                          <option value="Wampanoag">Wampanoag Tribe of Gay Head (Aquinnah)</option>
                                                          <option value="Washoe">
                                                            Washoe Tribe of Nevada &amp; California (Carson Colony, Dresslerville
                                                            Colony, Woodfords Community, Stewart Community, &amp; Washoe Ranches)
                                                          </option>
                                                          <option value="White Mountain">
                                                            White Mountain Apache Tribe of the Fort Apache Reservation, Arizona
                                                          </option>
                                                          <option value="Wichita">
                                                            Wichita and Affiliated Tribes (Wichita, Keechi, Waco &amp; Tawakonie),
                                                            Oklahoma
                                                          </option>
                                                          <option value="Wilton">Wilton Rancheria, California</option>
                                                          <option value="Winnebago">Winnebago Tribe of Nebraska</option>
                                                          <option value="Winnemucca">Winnemucca Indian Colony of Nevada</option>
                                                          <option value="Wiyot">Wiyot Tribe, California</option>
                                                          <option value="Wrangell">Wrangell Cooperative Association</option>
                                                          <option value="Wyandotte Nation">Wyandotte Nation</option>
                                                          <option value="Yakutat">Yakutat Tlingit Tribe</option>
                                                          <option value="Yankton">Yankton Sioux Tribe of South Dakota</option>
                                                          <option value="Yavapai-Apache">
                                                            Yavapai-Apache Nation of the Camp Verde Indian Reservation, Arizona
                                                          </option>
                                                          <option value="Yavapai-Prescott">Yavapai-Prescott Indian Tribe</option>
                                                          <option value="Yerington">
                                                            Yerington Paiute Tribe of the Yerington Colony and Campbell Ranch, Nevada
                                                          </option>
                                                          <option value="Yocha Dehe">Yocha Dehe Wintun Nation, California</option>
                                                          <option value="Yomba Shoshone">
                                                            Yomba Shoshone Tribe of the Yomba Reservation, Nevada
                                                          </option>
                                                          <option value="Ysleta Del Sur">Ysleta del Sur Pueblo</option>
                                                          <option value="Yuhaaviatam of San Manuel Nation">
                                                            Yuhaaviatam of San Manuel Nation
                                                          </option>
                                                          <option value="Andreafski">Yupiit of Andreafski</option>
                                                          <option value="Yurok">
                                                            Yurok Tribe of the Yurok Reservation, California
                                                          </option>
                                                          <option value="Pueblo of Zuni">
                                                            Zuni Tribe of the Zuni Reservation, New Mexico
                                                          </option>
                                                          <option value="Other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-3 tribaljurisdiction" style="display: none;">
                                                        <label for="nameofothertribe" class="mid">d. Name of other Tribe</label>
                                                        <input type="text" id="nameofothertribe" class="form-control"
                                                            name="Name of other Tribe" placeholder="Enter Name of other Tribe">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Current U.S Address</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="row align-items-center justify-content-between">
                                                    <div class="row currentaddressdetils">
                                                        <div class="col-lg-4">
                                                            <label for="currentaddress" class="mid">11. Address (number, street, and apt. or suite no.) &nbsp; <span  style="color:red">*</span></label>
                                                            <input type="text" id="currentaddress" class="form-control"
                                                                name="Current Address (number, street, and apt. or suite no.)" placeholder="Enter Address" >
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="currentcity" class="mid">12. City  &nbsp; <span  style="color:red">*</span></label>
                                                            <input type="text" id="currentcity" class="form-control"
                                                                name="Current City" placeholder="Enter City" >
                                                        </div>
  
                                                        <div class="col-lg-3">
                                                            <label for="currentusteritory" class="mid">13. U.S. or U.S Teritory  &nbsp; <span  style="color:red">*</span>   </label> 
                                                                <select id="currentusteritory" class="form-control form-select" name="Current U.S. or U.S Teritory" >  
                                                                  <option disabled selected>Select U.S. or U.S Teritory</option>
                                                                  <option value="US">United States of America</option><option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option></select>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <label for="currentstate" class="mid">14. State &nbsp; <span  style="color:red">*</span></label>
                                                            <select id="currentstate" class="form-control"
                                                                name="Current State">
                                                                <option disabled selected>Select a state
                                                                </option>
                                                                <option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option>
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
                                                            <label for="currentzip" class="mid">15. Zip Code  &nbsp; <span  style="color:red">*</span></label>
                                                            <input type="text" id="currentzip" class="form-control"
                                                                name="Current Zip Code" placeholder="Enter Zip Code" >
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                          <div class="card h-100 mt-5 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Part II. Company Applicant(s) Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-12 mb-5">
                                                        <div class="accordion" id="accordion7">
                                                            <div class="accordion-item">
                                                              <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                                                                  Need Help?
                                                                </button>
                                                              </h2>
                                                              <div id="collapseSeven" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordion7">
                                                                <div class="accordion-body">
                                                                   <p>Company applicant information is entered in fields 18 through 33 of the BOIR. Company applicants are individuals; no companies or legal entities may be reported as company applicants. Reporting companies may also provide FinCEN Identifiers for company applicants instead of this information. See detailed description below.</p>
                                                                   <p>Use the “Add Company Applicant” or “Remove Company Applicant” keys at the top of this section to add or remove additional company applicants. No more than two company applicants should be reported.</p>
                                                                   <p>If existing reporting company was checked in item 16, company applicant information is not ; proceed to Part III.</p>
                                                                </div></div></div></div>
                                                                    </div>
                                                    <div class="col-lg-12 mb-5">
                                                        <label class="form-check-label"><input type="checkbox" id="existingreportingcompany" name="Existing reporting company" class="radio"> 16. Existing reporting company
                                                            <small>(check if existing reporting company as of January 1, 2024)</small>
                                                            </label>
                                                    </div>
                                                    <div class="col-lg-12 my-5">17. (This item is reserved for future use)</div>
                                                    <div class="col-3"><button type="button" id="addcompanyapplicant" class="btn btn-primary">Add Company Applicant</button> </div>
                                                            <div class="col-12">&nbsp;</div>
                                                    <div id="companyapplicant" class="col-lg-12 mb-5" >
                                                    <div  id="companyapplicant1">
                                                        <div class="row"> 
                                                            <div class="col-3">
                                                                <label for="companyapplicantfincenid" class="mid">18. Company applicant FinCEN ID</label>
                                                                <input type="text" id="companyapplicantfincenid"
                                                                    class="form-control" name="Company applicant FinCEN ID"
                                                                    placeholder="Enter FinCEN ID">
                                                            </div>
                                                            <div class="col-12">&nbsp;</div>
                                                            <div class="col-3">
                                                                <label for="companyapplicantindividualname" class="mid">19. Individual's last name &nbsp; <span  style="color:red">*</span></label>
                                                                <input type="text" id="companyapplicantindividualname"
                                                                    class="form-control" name="Individual's last name"
                                                                    placeholder="Enter Individual's last name" >
                                                            </div>
                                                            <div class="col-3">
                                                                <label for="companyapplicantfirstname" class="mid">20. First Name  &nbsp; <span  style="color:red">*</span></label>
                                                                <input type="text" id="companyapplicantfirstname"
                                                                    class="form-control" name="companyapplicantfirstname"
                                                                    placeholder="Company Applicant's First Name" >
                                                            </div>
                                                            <div class="col-3">
                                                                <label for="companyapplicantmiddlename" class="mid">21. Middle Name</label>
                                                                <input type="text" id="companyapplicantmiddlename"
                                                                    class="form-control" name="Company Applicant's Middle Name"
                                                                    placeholder="Enter Middle Name">
                                                            </div>
                                                            <div class="col-3">
                                                                <label for="companyapplicantsuffix" class="mid">22. Suffix</label>
                                                                <input type="text" id="companyapplicantsuffix"
                                                                    class="form-control" name="Company Applicant's Suffix"
                                                                    placeholder="Enter Suffix">
                                                            </div>
                                                            <div class="col-3">
                                                                <label for="applicantbirthMo" class="mid">23. Date of birth &nbsp; <span  style="color:red">*</span></label>
                                                            <div class="d-flex">
                                                                <input type="text" id="applicantbirthMo" pattern="[0-9]{1,2}" placeholder="MM" class="form-control " maxlength="2" size="2" name="Birth Month" >
                                                                <input type="text" id="applicantbirthDay" pattern="[0-9]{1,2}" placeholder="DD" class="form-control " name="Birth Day" maxlength="2" size="2">
                                                                <input type="text" id="applicantbirthYEAR" pattern="[0-9]{4}" placeholder="YYYY" class="form-control " name="Birth Year" maxlength="4" size="4">
                                                              </div>    
                                                    </div>
                                                    </div>   
                                                    </div> 
                                                    </div>
  
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Address Type</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-2">
                                                        <label class="form-check-label"><input type="radio" id="currentaddresstypebusiness"
                                                                name="Address Type" value="Business Address" class="radio radioInput  form-check-input"> Business Address</label>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label class="form-check-label"><input type="radio" id="currentaddresstyperesidential"
                                                                name="Address Type" value="Residential Address"
                                                                class="radio radioInput  form-check-input "> Residential Address</label>
                                                    </div>
                                                    <div class="col-lg-12">&nbsp;</div>
                                                    <div class="col-lg-4">
                                                        <label for="typecurrentaddress" class="mid">25. Address (number, street, and apt. or suite no.) &nbsp; <span  style="color:red">*</span> </label>
                                                        <input type="text" id="typecurrentaddress" class="form-control"
                                                            name="Address number, street, and apt. or suite no." placeholder="Enter Address" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="typecurrentaddresscity" class="mid">26. City &nbsp; <span  style="color:red">*</span> </label>
                                                        <input type="text" id="typecurrentaddresscity" class="form-control"
                                                            name="City" placeholder="Enter City">
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="typecurrentaddressjuridiction" class="mid">27. Country/Juridiction &nbsp; <span  style="color:red">*</span></label>
                                                        <select class="form-control" id="typecurrentaddressjuridiction"   name="Country Juridiction" aria-hidden="true"  >
                                                          <option disabled selected>Select Country/Juridiction</option>
    <option value="US">United States of America</option><option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia, Plurinational State Of</option><option value="BQ">Bonaire, Sint Eustatius And Saba</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic Of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte D'ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island And Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic Of</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, The Former Yugoslav Republic Of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova, Republic Of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (french Part)</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten (dutch Part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic Of</option><option value="TH">Thailand</option><option value="TL">Timor-leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela, Bolivarian Republic Of</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
  
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="typecurrentaddressstate" class="mid">28. State &nbsp; <span  style="color:red">*</span></label>
                                                        <select id="typecurrentaddressstate" class="form-control"
                                                            name="State" >
                                                            <option disabled selected>Select a state</option>
                                                            <option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option>
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
                                                        <label for="typecurrentaddresszip" class="mid">29. Zip Code/Foreign postal code &nbsp; <span  style="color:red">*</span></label>
                                                        <input type="text" id="typecurrentaddresszip" class="form-control"
                                                            name="Zip Code Foreign postal code" placeholder="Enter Zip Code" >
                                                    </div> 
                                                </div>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100 mt-5 exemptentityoption" >
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Form of identification and issuing juridiction</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    <div class="col-lg-4">
                                                        <label for="formidentificationtype" class="mid">30. Identification document type &nbsp; <span  style="color:red">*</span></label>
                                                        <select id="formidentificationtype" name="Identification document type" class="form-control" >
                                                        <option disabled selected>Select Identification document type</option>
                                                        <option value="37">State issued driver's license</option><option value="38">State/local/tribe-issued ID</option><option value="39">U.S. passport</option><option value="40">Foreign passport</option></select>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <label for="formidentificationtypenumber" class="mid">31. Indentification document number &nbsp; <span  style="color:red">*</span></label>
                                                            <input type="text" id="formidentificationtypenumber" class="form-control"
                                                                name="Indentification document number" placeholder="Enter Indentification document number" >
                                                        </div> 
                                                        <div class="col-lg-12 mt-5 mb-3">
                                                            <label class="mid">32. Identifying document issuing juridiction  &nbsp; <span  style="color:red">*</span></label></div>
                                                        <div class="col-lg-4">
                                                            <label for="countryidentificationform" class="mid">a. Country/Jurisdiction <small>(if foriegn tax ID only)</small></label> 
                                                            <select class="form-control" id="countryidentificationform"   name="Country Jurisdiction" aria-hidden="true"  >
                                                              <option disabled selected>Select Country/Jurisdiction</option>
                                                                <option value="US">United States of America</option><option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia, Plurinational State Of</option><option value="BQ">Bonaire, Sint Eustatius And Saba</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic Of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte D'ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island And Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic Of</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, The Former Yugoslav Republic Of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova, Republic Of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (french Part)</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten (dutch Part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic Of</option><option value="TH">Thailand</option><option value="TL">Timor-leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela, Bolivarian Republic Of</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                                                         </div>
                                                        <div class="col-lg-2">
                                                            <label for="stateofidentificationform" class="mid">b. State of formation</label>
                                                                <select id="stateofidentificationform" class="form-control"
                                                                name="State of formation" >
                                                                <option disabled selected>Select a state</option>
                                                                <option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option>
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
                                                            <label for="tribalidentificationform" class="mid">c. Local/Tribal</label>
                                                             <select  class="form-control" id="tribalidentificationform" name="Local Tribal"  aria-hidden="true" >
                                                              <option disabled selected>Select Local/Tribal</option>
                                                                <option value="Absentee-Shawnee">Absentee-Shawnee Tribe of Indians of Oklahoma</option><option value="Agdaagux">Agdaagux Tribe of King Cove</option><option value="Agua Caliente">Agua Caliente Band of Cahuilla Indians of the Agua Caliente Indian Reservation, California</option><option value="Ak Chin">Ak-Chin Indian Community</option><option value="Akiachak">Akiachak Native Community</option><option value="Akiak">Akiak Native Community</option><option value="Alabama-Coushatta">Alabama-Coushatta Tribe of Texas</option><option value="Alabama-Quassarte Tribal Town">Alabama-Quassarte Tribal Town</option><option value="Alatna">Alatna Village</option><option value="Algaaciq">Algaaciq Native Village (St. Mary's)</option><option value="Allakaket">Allakaket Village</option><option value="Alturas">Alturas Indian Rancheria, California</option><option value="Alutiiq Tribe of Old Harbor">Alutiiq Tribe of Old Harbor</option><option value="Angoon">Angoon Community Association</option><option value="Anvik">Anvik Village</option><option value="Apache">Apache Tribe of Oklahoma</option><option value="Arctic Village">Arctic Village (See Native Village of Venetie Tribal Government)</option><option value="Asa'carsarmiut">Asa'carsarmiut Tribe</option><option value="Assiniboine and Sioux">Assiniboine &amp; Sioux Tribes of the Fort Peck Indian Reservation, Montana</option><option value="Augustine">Augustine Band of Cahuilla Indians, California</option><option value="Bad River Band">Bad River Band of the Lake Superior Tribe of Chippewa Indians of the Bad River Reservation, Wisconsin</option><option value="Bay Mills">Bay Mills Indian Community, Michigan</option><option value="Bear River">Bear River Band of the Rohnerville Rancheria, California</option><option value="Beaver">Beaver Village</option><option value="Berry Creek">Berry Creek Rancheria of Maidu Indians of California</option><option value="Big Lagoon">Big Lagoon Rancheria, California</option><option value="Big Pine Reservation">Big Pine Paiute Tribe of the Owens Valley</option><option value="Big Sandy">Big Sandy Rancheria of Western Mono Indians of California</option><option value="Big Valley Rancheria">Big Valley Band of Pomo Indians of the Big Valley Rancheria, California</option><option value="Birch Creek">Birch Creek Tribe</option><option value="Bishop Paiute">Bishop Paiute Tribe</option><option value="Blackfeet">Blackfeet Tribe of the Blackfeet Indian Reservation of Montana</option><option value="Blue Lake">Blue Lake Rancheria, California</option><option value="Bridgeport Indian Colony">Bridgeport Indian Colony</option><option value="Buena Vista Rancheria">Buena Vista Rancheria of Me-Wuk Indians of California</option><option value="Burns Paiute">Burns Paiute Tribe</option><option value="Cabazon">Cabazon Band of Mission Indians, California</option><option value="Cachil DeHe">Cachil DeHe Band of Wintun Indians of the Colusa Indian Community of the Colusa Rancheria, California</option><option value="Caddo">Caddo Nation of Oklahoma</option><option value="Cahto">Cahto Tribe of the Laytonville Rancheria</option><option value="Cahuilla">Cahuilla Band of Indians</option><option value="California Valley">California Valley Miwok Tribe, California</option><option value="Campo">Campo Band of Diegueno Mission Indians of the Campo Indian Reservation, California</option><option value="Capitan Grande">Capitan Grande Band of Diegueno Mission Indians of California (Barona Group of Capitan Grande Band of Mission Indians of the Barona Reservation, California)</option><option value="Capitan Grande Band">Capitan Grande Band of Diegueno Mission Indians of California</option><option value="Viejas">Capitan Grande Band of Diegueno Mission Indians of California: Viejas (Baron Long) Group of Capitan Grande Band of Mission Indians of the Viejas Reservation, California</option><option value="Catawba">Catawba Indian Nation (aka Catawba Indian Tribe of South Carolina)</option><option value="Cayuga Nation of New York">Cayuga Nation</option><option value="Cedarville">Cedarville Rancheria, California</option><option value="Tlingit &amp; Haida">Central Council of the Tlingit &amp; Haida Indian Tribes</option><option value="Chalkyitsik">Chalkyitsik Village</option><option value="Cheesh-Na">Cheesh-Na Tribe</option><option value="Chemehuevi">Chemehuevi Indian Tribe of the Chemehuevi Reservation, California</option><option value="Cher-Ae Heights">Cher-Ae Heights Indian Community of the Trinidad Rancheria, California</option><option value="Cherokee Nation">Cherokee Nation</option><option value="Chevak">Chevak Native Village</option><option value="Cheyenne River">Cheyenne and Arapaho Tribes, Oklahoma</option><option value="Cheyenne River Sioux Tribe">Cheyenne River Sioux Tribe of the Cheyenne River Reservation, South Dakota</option><option value="Chickahominy Indians-Eastern Division">Chickahominy Indian Tribe - Eastern Division</option><option value="Chickahominy Indian Tribe, Inc.">Chickahominy Indian Tribe</option><option value="Chickaloon">Chickaloon Native Village</option><option value="Chicken Ranch">Chicken Ranch Rancheria of Me-Wuk Indians of California</option><option value="Chignik Bay">Chignik Bay Tribal Council</option><option value="Chignik Lake">Chignik Lake Village</option><option value="Chilkat">Chilkat Indian Village (Klukwan)</option><option value="Chilkoot">Chilkoot Indian Association (Haines)</option><option value="Chinik">Chinik Eskimo Community (Golovin)</option><option value="Chippewa-Cree">Chippewa Cree Indians of the Rocky Boy's Reservation, Montana</option><option value="Chitimacha">Chitimacha Tribe of Louisiana</option><option value="Chuloonawick">Chuloonawick Native Village</option><option value="Circle">Circle Native Community</option><option value="Citizen Potawatomi">Citizen Potawatomi Nation, Oklahoma</option><option value="Cloverdale">Cloverdale Rancheria of Pomo Indians of California</option><option value="Cocopah">Cocopah Tribe of Arizona</option><option value="Coeur D'Alene">Coeur D'Alene Tribe</option><option value="Cold Springs">Cold Springs Rancheria of Mono Indians of California</option><option value="Colorado River">Colorado River Indian Tribes of the Colorado River Indian Reservation, Arizona and California</option><option value="Comanche">Comanche Nation, Oklahoma</option><option value="Confederated Salish">Confederated Salish and Kootenai Tribes of the Flathead Reservation</option><option value="Confederated Yakama">Confederated Tribes and Bands of the Yakama Nation</option><option value="Siletz Tribe">Confederated Tribes of Siletz Indians of Oregon</option><option value="Chehalis">Confederated Tribes of the Chehalis Reservation</option><option value="Confederated Colville">Confederated Tribes of the Colville Reservation</option><option value="Confederated Coos">Confederated Tribes of the Coos, Lower Umpqua and Siuslaw Indians</option><option value="Confederated Goshute">Confederated Tribes of the Goshute Reservation, Nevada and Utah</option><option value="Grand Ronde Tribes">Confederated Tribes of the Grand Ronde Community of Oregon</option><option value="Umatilla Tribe">Confederated Tribes of the Umatilla Indian Reservation</option><option value="Warms Springs Tribe">Confederated Tribes of the Warm Springs Reservation of Oregon</option><option value="Coquille">Coquille Indian Tribe</option><option value="Coushatta">Coushatta Tribe of Louisiana</option><option value="Cow Creek">Cow Creek Band of Umpqua Tribe of Indians</option><option value="Cowlitz">Cowlitz Indian Tribe</option><option value="Coyote Valley">Coyote Valley Band of Pomo Indians of California</option><option value="Craig">Craig Tribal Association</option><option value="Crow Creek">Crow Creek Sioux Tribe of the Crow Creek Reservation, South Dakota</option><option value="Crow">Crow Tribe of Montana</option><option value="Curyung">Curyung Tribal Council</option><option value="Delaware Nation">Delaware Nation, Oklahoma</option><option value="Delaware Tribe of Indians">Delaware Tribe of Indians</option><option value="Douglas">Douglas Indian Association</option><option value="Dry Creek">Dry Creek Rancheria Band of Pomo Indians, California</option><option value="Duckwater">Duckwater Shoshone Tribe of the Duckwater Reservation, Nevada</option><option value="Eastern Cherokee">Eastern Band of Cherokee Indians</option><option value="Eastern Shawnee Tribe of Oklahoma">Eastern Shawnee Tribe of Oklahoma</option><option value="Eastern Shoshone">Eastern Shoshone Tribe of the Wind River Reservation, Wyoming</option><option value="Egegik">Egegik Village</option><option value="Eklutna">Eklutna Native Village</option><option value="Elem">Elem Indian Colony of Pomo Indians of the Sulphur Bank Rancheria, California</option><option value="Elk Valley">Elk Valley Rancheria, California</option><option value="Ely Shoshone">Ely Shoshone Tribe of Nevada</option><option value="Emmonak">Emmonak Village</option><option value="Enterprise">Enterprise Rancheria of Maidu Indians of California</option><option value="Evansville">Evansville Village (aka Bettles Field)</option><option value="Ewiiaapaayp">Ewiiaapaayp Band of Kumeyaay Indians, California</option><option value="Federated Indians of Graton">Federated Indians of Graton Rancheria, California</option><option value="Flandreau">Flandreau Santee Sioux Tribe of South Dakota</option><option value="Forest County">Forest County Potawatomi Community, Wisconsin</option><option value="Assiniboine and Gros Ventre Tribes">Fort Belknap Indian Community of the Fort Belknap Reservation of Montana</option><option value="Fort Bidwell">Fort Bidwell Indian Community of the Fort Bidwell Reservation of California</option><option value="Fort Independence">Fort Independence Indian Community of Paiute Indians of the Fort Independence Reservation, California</option><option value="Fort McDermitt">Fort McDermitt Paiute and Shoshone Tribes of the Fort McDermitt Indian Reservation, Nevada and Oregon</option><option value="Fort McDowell">Fort McDowell Yavapai Nation, Arizona</option><option value="Fort Mojave">Fort Mojave Indian Tribe of Arizona, California &amp; Nevada</option><option value="Fort Sill">Fort Sill Apache Tribe of Oklahoma</option><option value="Galena">Galena Village (aka Louden Village)</option><option value="Gila River">Gila River Indian Community of the Gila River Indian Reservation, Arizona</option><option value="Grand Traverse">Grand Traverse Band of Ottawa and Chippewa Indians, Michigan</option><option value="Greenville">Greenville Rancheria</option><option value="Grindstone">Grindstone Indian Rancheria of Wintun-Wailaki Indians of California</option><option value="Guidiville">Guidiville Rancheria of California</option><option value="Gulkana">Gulkana Village Council</option><option value="Habematolel">Habematolel Pomo of Upper Lake, California</option><option value="Hannahville">Hannahville Indian Community, Michigan</option><option value="Havasupai">Havasupai Tribe of the Havasupai Reservation, Arizona</option><option value="Healy Lake">Healy Lake Village</option><option value="Ho-Chunk">Ho-Chunk Nation of Wisconsin</option><option value="Hoh">Hoh Indian Tribe</option><option value="Holy Cross">Holy Cross Tribe</option><option value="Hoonah">Hoonah Indian Association</option><option value="Hoopa">Hoopa Valley Tribe, California</option><option value="Hopi">Hopi Tribe of Arizona</option><option value="Hopland">Hopland Band of Pomo Indians, California</option><option value="Houlton">Houlton Band of Maliseet Indians</option><option value="Hualapai">Hualapai Indian Tribe of the Hualapai Indian Reservation, Arizona</option><option value="Hughes">Hughes Village</option><option value="Huslia">Huslia Village</option><option value="Hydaburg">Hydaburg Cooperative Association</option><option value="Igiugig">Igiugig Village</option><option value="Iipay">Iipay Nation of Santa Ysabel, California</option><option value="Inaja">Inaja Band of Diegueno Mission Indians of the Inaja and Cosmit Reservation, California</option><option value="Inupiat Community of the Arctic Slope">Inupiat Community of the Arctic Slope</option><option value="Ione">Ione Band of Miwok Indians of California</option><option value="Iowa of Kansas">Iowa Tribe of Kansas and Nebraska</option><option value="Iowa of Oklahoma">Iowa Tribe of Oklahoma</option><option value="Iqugmiut">Iqugmiut Traditional Council</option><option value="Ivanof Bay Tribe">Ivanof Bay Tribe</option><option value="Jackson">Jackson Band of Miwuk Indians</option><option value="Jamestown">Jamestown S'Klallam Tribe</option><option value="Jamul">Jamul Indian Village of California</option><option value="Jena">Jena Band of Choctaw Indians</option><option value="Jicarilla">Jicarilla Apache Nation, New Mexico</option><option value="Kaguyuk">Kaguyak Village</option><option value="Kaibab">Kaibab Band of Paiute Indians of the Kaibab Indian Reservation, Arizona</option><option value="Kaktovik">Kaktovik Village (aka Barter Island)</option><option value="Kalispel">Kalispel Indian Community of the Kalispel Reservation</option><option value="Karuk">Karuk Tribe</option><option value="Kashia">Kashia Band of Pomo Indians of the Stewarts Point Rancheria, California</option><option value="Kasigluk">Kasigluk Traditional Elders Council</option><option value="Kaw">Kaw Nation, Oklahoma</option><option value="Kenaitze">Kenaitze Indian Tribe</option><option value="Ketchikan">Ketchikan Indian Community</option><option value="Keweenaw">Keweenaw Bay Indian Community, Michigan</option><option value="Kialegee Tribal Town">Kialegee Tribal Town</option><option value="Kickapoo of Texas">Kickapoo Traditional Tribe of Texas</option><option value="Kickapoo Tribe in Kansas">Kickapoo Tribe of Indians of the Kickapoo Reservation in Kansas</option><option value="Kickapoo of Oklahoma">Kickapoo Tribe of Oklahoma</option><option value="King Island">King Island Native Community</option><option value="King Salmon">King Salmon Tribe</option><option value="Kiowa Tribe">Kiowa  Indian Tribe of Oklahoma</option><option value="Klamath">Klamath Tribes</option><option value="Klawock">Klawock Cooperative Association</option><option value="Cortina">Kletsel Dehe Band of Wintun Indians</option><option value="Knik">Knik Tribe</option><option value="Koi">Koi Nation of Northern California</option><option value="Kokhanok">Kokhanok Village</option><option value="Kootenai">Kootenai Tribe of Idaho</option><option value="Koyukuk">Koyukuk Native Village</option><option value="La Jolla">La Jolla Band of Luiseno Indians, California</option><option value="La Posta">La Posta Band of Diegueno Mission Indians of the La Posta Indian Reservation, California</option><option value="Lac Courte Oreilles">Lac Courte Oreilles Band of Lake Superior Chippewa Indians of Wisconsin</option><option value="Lac du Flambeau">Lac du Flambeau Band of Lake Superior Chippewa Indians of the Lac du Flambeau Reservation of Wisconsin</option><option value="Lac Vieux">Lac Vieux Desert Band of Lake Superior Chippewa Indians of Michigan</option><option value="Las Vegas">Las Vegas Tribe of Paiute Indians of the Las Vegas Indian Colony, Nevada</option><option value="Levelock">Levelock Village</option><option value="Lime">Lime Village</option><option value="Little River">Little River Band of Ottawa Indians, Michigan</option><option value="Little Shell Tribe">Little Shell Tribe of Chippewa Indians of Montana</option><option value="Little Traverse">Little Traverse Bay Bands of Odawa Indians, Michigan</option><option value="Lone Pine">Lone Pine Paiute-Shoshone Tribe</option><option value="Los Coyotes">Los Coyotes Band of Cahuilla and Cupeno Indians, California</option><option value="Lovelock">Lovelock Paiute Tribe of the Lovelock Indian Colony, Nevada</option><option value="Lower Brule">Lower Brule Sioux Tribe of the Lower Brule Reservation, South Dakota</option><option value="Lower Elwha">Lower Elwha Tribal Community</option><option value="Lower Sioux">Lower Sioux Indian Community in the State of Minnesota</option><option value="Lummi">Lummi Tribe of the Lummi Reservation</option><option value="Lytton">Lytton Rancheria of California</option><option value="Makah">Makah Indian Tribe of the Makah Indian Reservation</option><option value="Manchester">Manchester Band of Pomo Indians of the Manchester Rancheria, California</option><option value="Manley Hot Springs">Manley Hot Springs Village</option><option value="Manokotak">Manokotak Village</option><option value="Manzanita">Manzanita Band of Diegueno Mission Indians of the Manzanita Reservation, California</option><option value="Mashantucket Pequot">Mashantucket Pequot Indian Tribe</option><option value="Mashpee">Mashpee Wampanoag Tribe</option><option value="Match-e-be-nash-she-wish Band">Match-e-be-nash-she-wish Band of Pottawatomi Indians of Michigan</option><option value="Mcgrath">McGrath Native Village</option><option value="Mechoopda">Mechoopda Indian Tribe of Chico Rancheria, California</option><option value="Menominee">Menominee Indian Tribe of Wisconsin</option><option value="Mentasta">Mentasta Traditional Council</option><option value="Mesa Grande">Mesa Grande Band of Diegueno Mission Indians of the Mesa Grande Reservation, California</option><option value="Mescalero Apache">Mescalero Apache Tribe of the Mescalero Reservation, New Mexico</option><option value="Metlakatla">Metlakatla Indian Community, Annette Island Reserve</option><option value="Miami Tribe of Oklahoma">Miami Tribe of Oklahoma</option><option value="Miccosukee">Miccosukee Tribe of Indians</option><option value="Middletown">Middletown Rancheria of Pomo Indians of California</option><option value="Mi'kmaq Nation">Mi'kmaq Nation</option><option value="Bois Forte">Minnesota Chippewa Tribe - Bois Forte Band (Nett Lake)</option><option value="Fond du Lac">Minnesota Chippewa Tribe - Fond du Lac Band</option><option value="Grand Portage">Minnesota Chippewa Tribe - Grand Portage Band</option><option value="Leech Lake">Minnesota Chippewa Tribe - Leech Lake Band</option><option value="Mille Lacs">Minnesota Chippewa Tribe - Mille Lacs Band</option><option value="White Earth">Minnesota Chippewa Tribe - White Earth Band</option><option value="Minnesota Chippewa">Minnesota Chippewa Tribe, Minnesota</option><option value="Mississippi Choctaw">Mississippi Band of Choctaw Indians</option><option value="Moapa">Moapa Band of Paiute Indians of the Moapa River Indian Reservation, Nevada</option><option value="Modoc Nation">Modoc Nation</option><option value="Mohegan">Mohegan Tribe of Indians of Connecticut</option><option value="Monacan Indian Nation">Monacan Indian Nation</option><option value="Mooretown">Mooretown Rancheria of Maidu Indians of California</option><option value="Morongo">Morongo Band of Mission Indians, California</option><option value="Muckleshoot">Muckleshoot Indian Tribe</option><option value="Naknek">Naknek Native Village</option><option value="Nansemond Indian Tribe">Nansemond Indian Nation</option><option value="Narragansett">Narragansett Indian Tribe</option><option value="Afognak">Native Village of Afognak</option><option value="Akhiok">Native Village of Akhiok</option><option value="Akutan">Native Village of Akutan</option><option value="Aleknagik">Native Village of Aleknagik</option><option value="Ambler">Native Village of Ambler</option><option value="Atka">Native Village of Atka</option><option value="Native Village of Atqasuk">Native Village of Atqasuk</option><option value="Barrow">Native Village of Barrow Inupiat Traditional Government</option><option value="Belkofski">Native Village of Belkofski</option><option value="Brevig Mission">Native Village of Brevig Mission</option><option value="Buckland">Native Village of Buckland</option><option value="Cantwell">Native Village of Cantwell</option><option value="Chenega">Native Village of Chenega (aka Chanega)</option><option value="Chignik Lagoon">Native Village of Chignik Lagoon</option><option value="Chitina">Native Village of Chitina</option><option value="Chuathbaluk">Native Village of Chuathbaluk (Russian Mission, Kuskokwim)</option><option value="Council">Native Village of Council</option><option value="Deering">Native Village of Deering</option><option value="Diomede">Native Village of Diomede (aka Inalik)</option><option value="Eagle">Native Village of Eagle</option><option value="Eek">Native Village of Eek</option><option value="Ekuk">Native Village of Ekuk</option><option value="Ekwok">Native Village of Ekwok</option><option value="Elim IRA">Native Village of Elim</option><option value="Eyak">Native Village of Eyak (Cordova)</option><option value="False Pass">Native Village of False Pass</option><option value="Fort Yukon">Native Village of Fort Yukon</option><option value="Gakona">Native Village of Gakona</option><option value="Gambell">Native Village of Gambell</option><option value="Georgetown">Native Village of Georgetown</option><option value="Goodnews Bay">Native Village of Goodnews Bay</option><option value="Hamilton">Native Village of Hamilton</option><option value="Hooper Bay">Native Village of Hooper Bay</option><option value="Kanatak">Native Village of Kanatak</option><option value="Karluk">Native Village of Karluk</option><option value="Kiana">Native Village of Kiana</option><option value="Kipnuk">Native Village of Kipnuk</option><option value="Kivalina">Native Village of Kivalina</option><option value="Kluti Kaah">Native Village of Kluti Kaah (aka Copper Center)</option><option value="Kobuk">Native Village of Kobuk</option><option value="Kongiganak">Native Village of Kongiganak</option><option value="Kotzebue">Native Village of Kotzebue</option><option value="Koyuk">Native Village of Koyuk</option><option value="Kwigillingok">Native Village of Kwigillingok</option><option value="Kwinhagak">Native Village of Kwinhagak (aka Quinhagak)</option><option value="Larsen Bay">Native Village of Larsen Bay</option><option value="Marshall">Native Village of Marshall (aka Fortuna Ledge)</option><option value="Mary's Igloo">Native Village of Mary's Igloo</option><option value="Mekoryuk">Native Village of Mekoryuk</option><option value="Minto">Native Village of Minto</option><option value="Nanwalek">Native Village of Nanwalek (aka English Bay)</option><option value="Napaimute">Native Village of Napaimute</option><option value="Napakiak">Native Village of Napakiak</option><option value="Napaskiak">Native Village of Napaskiak</option><option value="Nelson Lagoon">Native Village of Nelson Lagoon</option><option value="Nightmute">Native Village of Nightmute</option><option value="Nikolski">Native Village of Nikolski</option><option value="Noatak">Native Village of Noatak</option><option value="Nuiqsut">Native Village of Nuiqsut (aka Nooiksut)</option><option value="Nunam Iqua">Native Village of Nunam Iqua</option><option value="Nunapitchuk">Native Village of Nunapitchuk</option><option value="Ouzinkie">Native Village of Ouzinkie</option><option value="Paimiut">Native Village of Paimiut</option><option value="Perryville">Native Village of Perryville</option><option value="Pilot Point">Native Village of Pilot Point</option><option value="Point Hope IRA">Native Village of Point Hope</option><option value="Point Lay IRA">Native Village of Point Lay</option><option value="Port Graham">Native Village of Port Graham</option><option value="Port Heiden">Native Village of Port Heiden</option><option value="Port Lions">Native Village of Port Lions</option><option value="Ruby">Native Village of Ruby</option><option value="St. Michael IRA">Native Village of Saint Michael</option><option value="Savoonga">Native Village of Savoonga</option><option value="Scammon Bay">Native Village of Scammon Bay</option><option value="Selawik">Native Village of Selawik</option><option value="Shaktoolik">Native Village of Shaktoolik</option><option value="Shishmaref IRA">Native Village of Shishmaref</option><option value="Shungnak">Native Village of Shungnak</option><option value="Stevens Village">Native Village of Stevens</option><option value="Tanacross">Native Village of Tanacross</option><option value="Tanana">Native Village of Tanana</option><option value="Tatitlek">Native Village of Tatitlek</option><option value="Tazlina">Native Village of Tazlina</option><option value="Teller">Native Village of Teller</option><option value="Tetlin">Native Village of Tetlin</option><option value="Tuntutuliak">Native Village of Tuntutuliak</option><option value="Tununak">Native Village of Tununak</option><option value="Tyonek">Native Village of Tyonek</option><option value="Unalakleet">Native Village of Unalakleet</option><option value="Unga">Native Village of Unga</option><option value="Venetie IRA">Native Village of Venetie Tribal Government (Arctic Village and Village of Venetie)</option><option value="Wales">Native Village of Wales</option><option value="White Mountain AK">Native Village of White Mountain</option><option value="Navajo">Navajo Nation, Arizona, New Mexico &amp; Utah</option><option value="Nenana">Nenana Native Association</option><option value="New Koliganek">New Koliganek Village Council</option><option value="New Stuyahok">New Stuyahok Village</option><option value="Newhalen">Newhalen Village</option><option value="Newtok">Newtok Village</option><option value="Nez Perce">Nez Perce Tribe</option><option value="Nikolai">Nikolai Village</option><option value="Ninilchik">Ninilchik Village</option><option value="Nisqually">Nisqually Indian Tribe</option><option value="Nome">Nome Eskimo Community</option><option value="Nondalton">Nondalton Village</option><option value="Nooksack">Nooksack Indian Tribe</option><option value="Noorvik">Noorvik Native Community</option><option value="Northern Arapaho">Northern Arapaho Tribe of the Wind River Reservation, Wyoming</option><option value="Northern Cheyenne">Northern Cheyenne Tribe of the Northern Cheyenne Indian Reservation, Montana</option><option value="North Fork">Northfork Rancheria of Mono Indians of California</option><option value="Northway">Northway Village</option><option value="Northwestern Shoshone">Northwestern Band of the Shoshone Nation</option><option value="Nottawaseppi Potawatomi">Nottawaseppi Huron Band of the Potawatomi, Michigan</option><option value="Nulato">Nulato Village</option><option value="Nunakauyarmiut">Nunakauyarmiut Tribe</option><option value="Oglala Sioux">Oglala Sioux Tribe</option><option value="Ohkay Owingeh">Ohkay Owingeh, New Mexico</option><option value="Omaha">Omaha Tribe of Nebraska</option><option value="Oneida">Oneida Indian Nation</option><option value="Oneida Nation (Wisconsin)">Oneida Nation</option><option value="Onondaga">Onondaga Nation</option><option value="Grayling">Organized Village of Grayling (aka Holikachuk)</option><option value="Kake">Organized Village of Kake</option><option value="Kasaan">Organized Village of Kasaan</option><option value="Kwethluk">Organized Village of Kwethluk</option><option value="Saxman">Organized Village of Saxman</option><option value="Orutsararmiut">Orutsararmiut Traditional Native Council</option><option value="Oscarville">Oscarville Traditional Village</option><option value="Otoe-Missouria">Otoe-Missouria Tribe of Indians, Oklahoma</option><option value="Ottawa Tribe of Oklahoma">Ottawa Tribe of Oklahoma</option><option value="Paiute of Utah">Paiute Indian Tribe of Utah (Cedar Band of Paiutes, Kanosh Band of Paiutes, Koosharem Band of Paiutes, Indian Peaks Band of Paiutes, and Shivwits Band of Paiutes)</option><option value="Paiute-Shoshone">Paiute-Shoshone Tribe of the Fallon Reservation and Colony, Nevada</option><option value="Pala">Pala Band of Mission Indians</option><option value="Pamunkey Indian Tribe">Pamunkey Indian Tribe</option><option value="Pascua Yaqui">Pascua Yaqui Tribe of Arizona</option><option value="Paskenta">Paskenta Band of Nomlaki Indians of California</option><option value="Passamaquoddy Indian Township">Passamaquoddy Tribe - Indian Township</option><option value="Passamaquoddy Pleasant Point">Passamaquoddy Tribe - Pleasant Point</option><option value="Passamaquoddy Tribe">Passamaquoddy Tribe</option><option value="Pauloff Harbor">Pauloff Harbor Village</option><option value="Pauma">Pauma Band of Luiseno Mission Indians of the Pauma &amp; Yuima Reservation, California</option><option value="Pawnee">Pawnee Nation of Oklahoma</option><option value="Pechanga Band of Indians">Pechanga Band of Indians</option><option value="Pedro Bay">Pedro Bay Village</option><option value="Penobscot">Penobscot Nation</option><option value="Peoria Tribe of Indians of Oklahoma">Peoria Tribe of Indians of Oklahoma</option><option value="Petersburg">Petersburg Indian Association</option><option value="Picayune">Picayune Rancheria of Chukchansi Indians of California</option><option value="Pilot Station">Pilot Station Traditional Village</option><option value="Pinoleville">Pinoleville Pomo Nation, California</option><option value="Pit River">Pit River Tribe, California</option><option value="Pitka's Point">Pitka's Point Traditional Council</option><option value="Platinum">Platinum Traditional Village</option><option value="Poarch">Poarch Band of Creek Indians</option><option value="Pokagon">Pokagon Band of Potawatomi Indians, Michigan and Indiana</option><option value="Ponca of Oklahoma">Ponca Tribe of Indians of Oklahoma</option><option value="Ponca of Nebraska">Ponca Tribe of Nebraska</option><option value="Port Gamble">Port Gamble S'Klallam Tribe</option><option value="Portage Creek">Portage Creek Village (aka Ohgsenakale)</option><option value="Potter Valley">Potter Valley Tribe, California</option><option value="Prairie Band">Prairie Band Potawatomi Nation</option><option value="Prairie Island">Prairie Island Indian Community in the State of Minnesota</option><option value="Pribilof Islands Aleut Communities">Pribilof Islands Aleut Communities</option><option value="Pueblo of Acoma">Pueblo of Acoma, New Mexico</option><option value="Pueblo of Cochiti">Pueblo of Cochiti, New Mexico</option><option value="Pueblo of Isleta">Pueblo of Isleta, New Mexico</option><option value="Pueblo of Jemez">Pueblo of Jemez, New Mexico</option><option value="Pueblo of Laguna">Pueblo of Laguna, New Mexico</option><option value="Pueblo of Nambe">Pueblo of Nambe, New Mexico</option><option value="Pueblo of Picuris">Pueblo of Picuris, New Mexico</option><option value="Pueblo of Pojoaque">Pueblo of Pojoaque, New Mexico</option><option value="Pueblo of San Felipe">Pueblo of San Felipe, New Mexico</option><option value="Pueblo of San Ildefonso">Pueblo of San Ildefonso, New Mexico</option><option value="Pueblo of Sandia">Pueblo of Sandia, New Mexico</option><option value="Pueblo of Santa Ana">Pueblo of Santa Ana, New Mexico</option><option value="Pueblo of Santa Clara">Pueblo of Santa Clara, New Mexico</option><option value="Pueblo of Taos">Pueblo of Taos, New Mexico</option><option value="Pueblo of Tesuque">Pueblo of Tesuque, New Mexico</option><option value="Pueblo of Zia">Pueblo of Zia, New Mexico</option><option value="Puyallup">Puyallup Tribe of the Puyallup Reservation</option><option value="Pyramid Lake">Pyramid Lake Paiute Tribe of the Pyramid Lake Reservation, Nevada</option><option value="Qagan Tayagungin">Qagan Tayagungin Tribe of Sand Point</option><option value="Qawalangin">Qawalangin Tribe of Unalaska</option><option value="Quapaw Nation">Quapaw Nation</option><option value="Quartz Valley">Quartz Valley Indian Community of the Quartz Valley Reservation of California</option><option value="Quechan">Quechan Tribe of the Fort Yuma Indian Reservation, California &amp; Arizona</option><option value="Quileute">Quileute Tribe of the Quileute Reservation</option><option value="Quinault">Quinault Indian Nation</option><option value="Ramah Navajo Chapter">Ramah Navajo Chapter of the Navajo Nation</option><option value="Ramona">Ramona Band of Cahuilla, California</option><option value="Rampart">Rampart Village</option><option value="Rappahannock Tribe, Inc.">Rappahannock Tribe, Inc.</option><option value="Red Cliff">Red Cliff Band of Lake Superior Chippewa Indians of Wisconsin</option><option value="Red Lake">Red Lake Band of Chippewa Indians, Minnesota</option><option value="Redding">Redding Rancheria, California</option><option value="Redwood Valley">Redwood Valley or Little River Band of Pomo Indians of the Redwood Valley Rancheria California</option><option value="Reno-Sparks">Reno-Sparks Indian Colony, Nevada</option><option value="Resighini">Resighini Rancheria, California</option><option value="Rincon">Rincon Band of Luiseno Mission Indians of the Rincon Reservation, California</option><option value="Robinson">Robinson Rancheria</option><option value="Rosebud">Rosebud Sioux Tribe of the Rosebud Indian Reservation, South Dakota</option><option value="Round Valley">Round Valley Indian Tribes, Round Valley Reservation, California</option><option value="Sac &amp; Fox Nation of Missouri in Kansas and Nebraska">Sac &amp; Fox Nation of Missouri in Kansas and Nebraska</option><option value="Sac &amp; Fox Nation, Oklahoma">Sac &amp; Fox Nation, Oklahoma</option><option value="Sac &amp; Fox of Mississippi">Sac &amp; Fox Tribe of the Mississippi in Iowa</option><option value="Saginaw Chippewa">Saginaw Chippewa Indian Tribe of Michigan</option><option value="St. George">Saint George Island (See Pribilof Islands Aleut Communities of St. Paul &amp; St. George Islands)</option><option value="Saint Paul">Saint Paul Island (See Pribilof Islands Aleut Communities of St. Paul &amp; St. George Islands)</option><option value="Saint Regis">Saint Regis Mohawk Tribe</option><option value="Salamatof">Salamatof Tribe</option><option value="Salt River">Salt River Pima-Maricopa Indian Community of the Salt River Reservation, Arizona</option><option value="Samish">Samish Indian Nation</option><option value="San Carlos">San Carlos Apache Tribe of the San Carlos Reservation, Arizona</option><option value="San Juan">San Juan Southern Paiute Tribe of Arizona</option><option value="San Pasqual">San Pasqual Band of Diegueno Mission Indians of California</option><option value="Santa Rosa of Cahuilla">Santa Rosa Band of Cahuilla Indians, California</option><option value="Santa Rosa">Santa Rosa Indian Community of the Santa Rosa Rancheria, California</option><option value="Santa Ynez">Santa Ynez Band of Chumash Mission Indians of the Santa Ynez Reservation, California</option><option value="Santee Sioux">Santee Sioux Nation, Nebraska</option><option value="Santo Domingo">Santo Domingo Pueblo</option><option value="Sauk-Suiattle">Sauk-Suiattle Indian Tribe</option><option value="Sault Ste. Marie">Sault Ste. Marie Tribe of Chippewa Indians, Michigan</option><option value="Scotts Valley">Scotts Valley Band of Pomo Indians of California</option><option value="Seldovia">Seldovia Village Tribe</option><option value="Seminole">Seminole Tribe of Florida</option><option value="Seneca">Seneca Nation of Indians</option><option value="Seneca-Cayuga Nation">Seneca-Cayuga Nation</option><option value="Shageluk">Shageluk Native Village</option><option value="Shakopee">Shakopee Mdewakanton Sioux Community of Minnesota</option><option value="Shawnee Tribe">Shawnee Tribe</option><option value="Sherwood Valley">Sherwood Valley Rancheria of Pomo Indians of California</option><option value="Shingle Springs">Shingle Springs Band of Miwok Indians, Shingle Springs Rancheria (Verona Tract), California</option><option value="Shinnecock">Shinnecock Indian Nation</option><option value="Shoalwater">Shoalwater Bay Indian Tribe of the Shoalwater Bay Indian Reservation</option><option value="Shoshone-Bannock">Shoshone-Bannock Tribes of the Fort Hall Reservation</option><option value="Shoshone-Paiute">Shoshone-Paiute Tribes of the Duck Valley Reservation, Nevada</option><option value="Sisseton-Wahpeton">Sisseton-Wahpeton Oyate of the Lake Traverse Reservation, South Dakota</option><option value="Sitka">Sitka Tribe of Alaska</option><option value="Skagway">Skagway Village</option><option value="Skokomish">Skokomish Indian Tribe</option><option value="Skull Valley">Skull Valley Band of Goshute Indians of Utah</option><option value="Snoqualmie">Snoqualmie Indian Tribe</option><option value="Soboba">Soboba Band of Luiseno Indians, California</option><option value="Sokaogon">Sokaogon Chippewa  Community, Wisconsin</option><option value="South Naknek">South Naknek Village</option><option value="Southern Ute">Southern Ute Indian Tribe of the Southern Ute Reservation, Colorado</option><option value="Spirit Lake">Spirit Lake Tribe, North Dakota</option><option value="Spokane">Spokane Tribe of the Spokane Reservation</option><option value="Squaxin">Squaxin Island Tribe of the Squaxin Island Reservation</option><option value="St. Croix">St. Croix Chippewa Indians of Wisconsin</option><option value="Standing Rock">Standing Rock Sioux Tribe of North &amp; South Dakota</option><option value="Stebbins">Stebbins Community Association</option><option value="Stillaguamish">Stillaguamish Tribe of Indians of Washington</option><option value="Stockbridge">Stockbridge Munsee Community, Wisconsin</option><option value="Summit Lake">Summit Lake Paiute Tribe of Nevada</option><option value="Sun'aq">Sun'aq Tribe of Kodiak</option><option value="Suquamish">Suquamish Indian Tribe of the Port Madison Reservation</option><option value="Susanville">Susanville Indian Rancheria, California</option><option value="Swinomish">Swinomish Indian Tribal Community</option><option value="Sycuan">Sycuan Band of the Kumeyaay Nation</option><option value="Table Mountain">Table Mountain Rancheria</option><option value="Takotna">Takotna Village</option><option value="Tangirnaq">Tangirnaq Native Village</option><option value="Tejon">Tejon Indian Tribe</option><option value="Telida">Telida Village</option><option value="Te-Moak">Te-Moak Tribe of Western Shoshone Indians of Nevada (Four constituent bands: Battle Mountain Band; Elko Band; South Fork Band and Wells Band)</option><option value="Chickasaw Nation">The Chickasaw Nation</option><option value="The Choctaw Nation of Oklahoma">The Choctaw Nation of Oklahoma</option><option value="The Muscogee (Creek) Nation">The Muscogee (Creek) Nation</option><option value="The Osage Nation">The Osage Nation</option><option value="The Seminole Nation  of Oklahoma">The Seminole Nation of Oklahoma</option><option value="Thlopthlocco Tribal Town">Thlopthlocco Tribal Town</option><option value="Three Affiliated">Three Affiliated Tribes of the Fort Berthold Reservation, North Dakota</option><option value="Timbi-sha Shoshone">Timbisha Shoshone Tribe</option><option value="Tohono O'odham">Tohono O'odham Nation of Arizona</option><option value="Tolowa Dee-ni'">Tolowa Dee-ni' Nation</option><option value="Tonawanda">Tonawanda Band of Seneca</option><option value="Tonkawa">Tonkawa Tribe of Indians of Oklahoma</option><option value="Tonto Apache">Tonto Apache Tribe of Arizona</option><option value="Torres Martinez">Torres Martinez Desert Cahuilla Indians, California</option><option value="Togiak">Traditional Village of Togiak</option><option value="Tulalip">Tulalip Tribes of Washington</option><option value="Tule River">Tule River Indian Tribe of the Tule River Reservation, California</option><option value="Tuluksak">Tuluksak Native Community</option><option value="Tunica-Biloxi">Tunica-Biloxi Indian Tribe</option><option value="Tuolumne">Tuolumne Band of Me-Wuk Indians of the Tuolumne Rancheria of California</option><option value="Turtle Mountain">Turtle Mountain Band of Chippewa Indians of North Dakota</option><option value="Tuscarora">Tuscarora Nation</option><option value="Twenty-Nine Palms">Twenty-Nine Palms Band of Mission Indians of California</option><option value="Twin Hills">Twin Hills Village</option><option value="Ugashik">Ugashik Village</option><option value="Umkumiut">Umkumiut Native Village</option><option value="United Auburn">United Auburn Indian Community of the Auburn Rancheria of California</option><option value="United Keetoowah Band of Cherokee Indians in Oklahoma">United Keetoowah Band of Cherokee Indians in Oklahoma</option><option value="Upper Mattaponi Tribe">Upper Mattaponi Tribe</option><option value="Upper Sioux">Upper Sioux Community, Minnesota</option><option value="Upper Skagit">Upper Skagit Indian Tribe</option><option value="Ute">Ute Indian Tribe of the Uintah &amp; Ouray Reservation, Utah</option><option value="Ute Mountain Ute">Ute Mountain Ute Tribe</option><option value="Benton">Utu Utu Gwaitu Paiute Tribe of the Benton Paiute Reservation, California</option><option value="Alakanuk">Village of Alakanuk</option><option value="Anaktuvuk Pass">Village of Anaktuvuk Pass</option><option value="Aniak">Village of Aniak</option><option value="Atmautluak">Village of Atmautluak</option><option value="Bill Moore's Slough">Village of Bill Moore's Slough</option><option value="Chefornak">Village of Chefornak</option><option value="Clark's Point">Village of Clarks Point</option><option value="Crooked Creek">Village of Crooked Creek</option><option value="Dot Lake">Village of Dot Lake</option><option value="Iliamna">Village of Iliamna</option><option value="Kalskag">Village of Kalskag</option><option value="Kaltag">Village of Kaltag</option><option value="Kotlik">Village of Kotlik</option><option value="Lower Kalskag">Village of Lower Kalskag</option><option value="Ohogamiut">Village of Ohogamiut</option><option value="Red Devil">Village of Red Devil</option><option value="Sleetmute">Village of Sleetmute</option><option value="Solomon">Village of Solomon</option><option value="Stony River">Village of Stony River</option><option value="Venetie">Village of Venetie (See Native Village of Venetie Tribal Government)</option><option value="Wainwright">Village of Wainwright</option><option value="Walker River">Walker River Paiute Tribe of the Walker River Reservation, Nevada</option><option value="Wampanoag">Wampanoag Tribe of Gay Head (Aquinnah)</option><option value="Washoe">Washoe Tribe of Nevada &amp; California (Carson Colony, Dresslerville Colony, Woodfords Community, Stewart Community, &amp; Washoe Ranches)</option><option value="White Mountain">White Mountain Apache Tribe of the Fort Apache Reservation, Arizona</option><option value="Wichita">Wichita and Affiliated Tribes (Wichita, Keechi, Waco &amp; Tawakonie), Oklahoma</option><option value="Wilton">Wilton Rancheria, California</option><option value="Winnebago">Winnebago Tribe of Nebraska</option><option value="Winnemucca">Winnemucca Indian Colony of Nevada</option><option value="Wiyot">Wiyot Tribe, California</option><option value="Wrangell">Wrangell Cooperative Association</option><option value="Wyandotte Nation">Wyandotte Nation</option><option value="Yakutat">Yakutat Tlingit Tribe</option><option value="Yankton">Yankton Sioux Tribe of South Dakota</option><option value="Yavapai-Apache">Yavapai-Apache Nation of the Camp Verde Indian Reservation, Arizona</option><option value="Yavapai-Prescott">Yavapai-Prescott Indian Tribe</option><option value="Yerington">Yerington Paiute Tribe of the Yerington Colony and Campbell Ranch, Nevada</option><option value="Yocha Dehe">Yocha Dehe Wintun Nation, California</option><option value="Yomba Shoshone">Yomba Shoshone Tribe of the Yomba Reservation, Nevada</option><option value="Ysleta Del Sur">Ysleta del Sur Pueblo</option><option value="Yuhaaviatam of San Manuel Nation">Yuhaaviatam of San Manuel Nation</option><option value="Andreafski">Yupiit of Andreafski</option><option value="Yurok">Yurok Tribe of the Yurok Reservation, California</option><option value="Pueblo of Zuni">Zuni Tribe of the Zuni Reservation, New Mexico</option><option value="Other">Other</option></select>
                                                        </div>
                                                        <div class="col-lg-3 tribalidentificationform" style="display: none">
                                                            <label for="othertribalidentificationform" class="mid">d. other Local/Tribal description</label>
                                                            <input type="text" id="othertribalidentificationform" class="form-control"
                                                                name="other Local Tribal description" placeholder="Enter other Local/Tribal description" >
                                                        </div>
  
                                                        <div class="col-lg-5">
                                                            <label for="imageidentificationform" class="mid">33. Identifying document image &nbsp; <span  style="color:red">*</span></label>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <input type="file" id="imageidentificationform" class="form-control" name="Identifying document image" accept="image/*">
                                                                <button type="button" class="ms-5 btn identificationbtnremove btn-danger">Remove</button>
                                                            </div></div>
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                          <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                          <div class="card h-100 mt-5 exemptentityoption">
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Part III. Beneficial Owner Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row">
                                                    
                                                    <div class="col-lg-12 my-5">
                                                    <labelclass="mid">34. (This item is reserved for future use)</labelclass></div>
                                                    <div class="col-3"><button type="button" id="addboiowner2" class="btn btn-primary">Add Beneficial Owner</button> </div>
                                                    <div id="addboi">
                                                    <div id="boionwner1" class="row">
                                                    <div class="col-12">&nbsp;</div>
                                                    <div class="col-lg-12" >
                                                        <label class="form-check-label"><input type="checkbox" id="parentguardian" name="Parent Guardian information instead of minor child" class="radio"> 35. Parent/Guardian information instead of minor child</label>
                                                    </div>
                                                    <div class="col-lg-5 my-5">
                                                        <label for="beneficialownerfincenid" class="mid">36. FinCEN ID</label>
                                                        <input type="text" id="beneficialownerfincenid" class="form-control"
                                                            name="FinCEN ID" placeholder="Enter FinCEN ID">
                                                    </div>
                                                    <div class="col-lg-12" >
                                                        <label class="form-check-label"><input type="checkbox" id="exemptentity" name="Exempt Entity" class="radio"> 37. Exempt Entity</label>
                                                    </div>
                                                    <div class="col-lg-12 mt-5">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 col-12 mt-5">Legal name and date of birth </h5>
                                                </div>
                                                    <div class="col-3">
                                                        <label for="legalnameindividualname" class="mid">38. Individual's last name or entity's legal name &nbsp; <span  style="color:red">*</span></label>
                                                    <input type="text" id="legalnameindividualname"
                                                        class="form-control" name="Individual last name or entity legal name"
                                                        placeholder="Enter Individual's last name or entity's legal name">
                                                </div>
                                                <div class="col-3">
                                                    <label for="legalnameindividualfirstname" class="mid">39. First Name &nbsp; <span  style="color:red">*</span></label>
                                                    <input type="text" id="legalnameindividualfirstname"
                                                        class="form-control" name="First Name"
                                                        placeholder="Enter First Name" >
                                                </div>
                                                <div class="col-3">
                                                    <label for="legalnameindividualmiddlename" class="mid">40. Middle Name</label>
                                                    <input type="text" id="legalnameindividualmiddlename"
                                                        class="form-control" name="Middle Name"
                                                        placeholder="Enter Middle Name">
                                                </div>
                                                <div class="col-3">
                                                    <label for="legalnameindividualsuffix" class="mid">41. Suffix</label>
                                                    <input type="text" id="legalnameindividualsuffix"
                                                        class="form-control" name="Suffix"
                                                        placeholder="Enter Suffix">
                                                </div>
                                                <div class="col-3">
                                                    <label for="legalnameindividualMo" class="mid">42. Date of Birth &nbsp; <span  style="color:red">*</span></label>
                                                <div class="d-flex">
                                                    <input type="text" id="legalnameindividualMo" pattern="[0-9]{1,2}" placeholder="MM" class="form-control " maxlength="2" size="2" name="Legal Name Individual Month" >
                                                    <input type="text" id="legalnameindividualDay" pattern="[0-9]{1,2}" placeholder="DD" class="form-control " name="Legal Name Individual Day" maxlength="2" size="2">
                                                    <input type="text" id="legalnameindividualYEAR" pattern="[0-9]{4}" placeholder="YYYY" class="form-control " name="Legal Name Individual Year" maxlength="4" size="4">
                                                  </div>   
                                                  </div>  
                                                  <div class="col-lg-12 mt-5"><h4 class="h6 font-weight-semi-bold text-uppercase mb-0 col-lg-12">Residendial Address</h4></div>
                                                    <div class="col-lg-4">
                                                        <label for="legalresidentialaddress" class="mid">43. Address (number, street, and apt. or suite no.)  &nbsp; <span  style="color:red">*</span> </label>
                                                        <input type="text" id="legalresidentialaddress" class="form-control"
                                                            name="Address number, street, and apt. or suite no." placeholder="Enter Address" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="legalresidentialaddresscity" class="mid">44. City &nbsp; <span  style="color:red">*</span> </label>
                                                        <input type="text" id="legalresidentialaddresscity" class="form-control"
                                                            name="City" placeholder="Enter City" >
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="legalresidentialaddressjuridiction" class="mid">45. Country/Juridiction &nbsp; <span  style="color:red">*</span></label>
                                                            <select class="form-control" id="legalresidentialaddressjuridiction"   name="Country Juridiction" aria-hidden="true"  >
                                                              <option disabled selected>Select Country/Juridiction</option>
                                                                <option value="US">United States of America</option><option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia, Plurinational State Of</option><option value="BQ">Bonaire, Sint Eustatius And Saba</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic Of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte D'ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island And Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic Of</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, The Former Yugoslav Republic Of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova, Republic Of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (french Part)</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten (dutch Part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic Of</option><option value="TH">Thailand</option><option value="TL">Timor-leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela, Bolivarian Republic Of</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label for="legalresidentialaddressstate" class="mid">46. State &nbsp; <span  style="color:red">*</span> </label>
                                                        <select id="legalresidentialsstate" class="form-control"
                                                            name="State" >
                                                            <option disabled selected>Select a state
                                                            </option>
                                                            <option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option>
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
                                                        <label for="legalresidentialaddresszip" class="mid">47. Zip Code/Foreign postal code &nbsp; <span  style="color:red">*</span> </label>
                                                        <input type="text" id="legalresidentialaddresszip" class="form-control"
                                                            name="Zip Code Foreign postal code" placeholder="Enter Zip Code" >
                                                    </div>  
                                                    <div class="col-lg-12 mt-5">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 col-lg-12">Form of identification and issuing juridiction</h5>
                                                </div>
                                                     <div class="col-lg-4">
                                                        <label for="residentialformidentificationtype" class="mid">48. Identification document type &nbsp; <span  style="color:red">*</span></label>
                                                        <select id="residentialformidentificationtype" name="Identification document type" class="form-control" >
                                                          <option disabled selected>Select Identification document type</option>
                                                            <option value="37">State issued driver's license</option><option value="38">State/local/tribe-issued ID</option><option value="39">U.S. passport</option><option value="40">Foreign passport</option></select>
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label for="residentialformidentificationnumber" class="mid">49. Identification document number &nbsp; <span  style="color:red">*</span> </label>
                                                        <input type="text" id="residentialformidentificationnumber" class="form-control"
                                                            name="Identification document number" placeholder="Enter Indentification document number" >
                                                    </div> 
                                                    <div class="col-md-12 mt-5 mb-4"> <label class="mid">50. Identifying document issuing juridiction  &nbsp; <span  style="color:red">*</span></label></div>
                                                        <div class="col-lg-4">
                                                            <label for="residentialcountryidentificationform" class="mid">a. Country/Jurisdiction <small>(if foriegn tax ID only)</small></label>
                                                            <select class="form-control" id="residentialcountryidentificationform"   name="Identifying document issuing juridiction " aria-hidden="true"  >
                                                              <option disabled selected>Select Country/Jurisdiction</option>
                                                                <option value="US">United States of America</option><option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia, Plurinational State Of</option><option value="BQ">Bonaire, Sint Eustatius And Saba</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic Of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte D'ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island And Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic Of</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, The Former Yugoslav Republic Of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova, Republic Of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (french Part)</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten (dutch Part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic Of</option><option value="TH">Thailand</option><option value="TL">Timor-leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela, Bolivarian Republic Of</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                                                         </div>
                                                        <div class="col-lg-2">
                                                            <label for="residentialstateofidentificationform" class="mid">b. State of formation</label>
                                                                <select id="residentialstateofidentificationform" class="form-control"
                                                                name="State of formation" >
                                                                <option disabled selected>Select a state</option>
                                                                <option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option>
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
                                                            <label for="residentialTribalIdentificationForm" class="mid">c. Local/Tribal</label>
                                                            <select
    class="form-control"
    id="residentialTribalIdentificationForm"
    name="LocalTribal"
    aria-hidden="true"
  >
    <option disabled selected>Select Local/Tribal</option>
    <option value="Absentee-Shawnee">
      Absentee-Shawnee Tribe of Indians of Oklahoma
    </option>
    <option value="Agdaagux">Agdaagux Tribe of King Cove</option>
    <option value="Agua Caliente">
      Agua Caliente Band of Cahuilla Indians of the Agua Caliente Indian
      Reservation, California
    </option>
    <option value="Ak Chin">Ak-Chin Indian Community</option>
    <option value="Akiachak">Akiachak Native Community</option>
    <option value="Akiak">Akiak Native Community</option>
    <option value="Alabama-Coushatta">Alabama-Coushatta Tribe of Texas</option>
    <option value="Alabama-Quassarte Tribal Town">
      Alabama-Quassarte Tribal Town
    </option>
    <option value="Alatna">Alatna Village</option>
    <option value="Algaaciq">Algaaciq Native Village (St. Mary's)</option>
    <option value="Allakaket">Allakaket Village</option>
    <option value="Alturas">Alturas Indian Rancheria, California</option>
    <option value="Alutiiq Tribe of Old Harbor">
      Alutiiq Tribe of Old Harbor
    </option>
    <option value="Angoon">Angoon Community Association</option>
    <option value="Anvik">Anvik Village</option>
    <option value="Apache">Apache Tribe of Oklahoma</option>
    <option value="Arctic Village">
      Arctic Village (See Native Village of Venetie Tribal Government)
    </option>
    <option value="Asa'carsarmiut">Asa'carsarmiut Tribe</option>
    <option value="Assiniboine and Sioux">
      Assiniboine &amp; Sioux Tribes of the Fort Peck Indian Reservation, Montana
    </option>
    <option value="Augustine">
      Augustine Band of Cahuilla Indians, California
    </option>
    <option value="Bad River Band">
      Bad River Band of the Lake Superior Tribe of Chippewa Indians of the Bad
      River Reservation, Wisconsin
    </option>
    <option value="Bay Mills">Bay Mills Indian Community, Michigan</option>
    <option value="Bear River">
      Bear River Band of the Rohnerville Rancheria, California
    </option>
    <option value="Beaver">Beaver Village</option>
    <option value="Berry Creek">
      Berry Creek Rancheria of Maidu Indians of California
    </option>
    <option value="Big Lagoon">Big Lagoon Rancheria, California</option>
    <option value="Big Pine Reservation">
      Big Pine Paiute Tribe of the Owens Valley
    </option>
    <option value="Big Sandy">
      Big Sandy Rancheria of Western Mono Indians of California
    </option>
    <option value="Big Valley Rancheria">
      Big Valley Band of Pomo Indians of the Big Valley Rancheria, California
    </option>
    <option value="Birch Creek">Birch Creek Tribe</option>
    <option value="Bishop Paiute">Bishop Paiute Tribe</option>
    <option value="Blackfeet">
      Blackfeet Tribe of the Blackfeet Indian Reservation of Montana
    </option>
    <option value="Blue Lake">Blue Lake Rancheria, California</option>
    <option value="Bridgeport Indian Colony">Bridgeport Indian Colony</option>
    <option value="Buena Vista Rancheria">
      Buena Vista Rancheria of Me-Wuk Indians of California
    </option>
    <option value="Burns Paiute">Burns Paiute Tribe</option>
    <option value="Cabazon">Cabazon Band of Mission Indians, California</option>
    <option value="Cachil DeHe">
      Cachil DeHe Band of Wintun Indians of the Colusa Indian Community of the
      Colusa Rancheria, California
    </option>
    <option value="Caddo">Caddo Nation of Oklahoma</option>
    <option value="Cahto">Cahto Tribe of the Laytonville Rancheria</option>
    <option value="Cahuilla">Cahuilla Band of Indians</option>
    <option value="California Valley">
      California Valley Miwok Tribe, California
    </option>
    <option value="Campo">
      Campo Band of Diegueno Mission Indians of the Campo Indian Reservation,
      California
    </option>
    <option value="Capitan Grande">
      Capitan Grande Band of Diegueno Mission Indians of California (Barona Group
      of Capitan Grande Band of Mission Indians of the Barona Reservation,
      California)
    </option>
    <option value="Capitan Grande Band">
      Capitan Grande Band of Diegueno Mission Indians of California
    </option>
    <option value="Viejas">
      Capitan Grande Band of Diegueno Mission Indians of California: Viejas (Baron
      Long) Group of Capitan Grande Band of Mission Indians of the Viejas
      Reservation, California
    </option>
    <option value="Catawba">
      Catawba Indian Nation (aka Catawba Indian Tribe of South Carolina)
    </option>
    <option value="Cayuga Nation of New York">Cayuga Nation</option>
    <option value="Cedarville">Cedarville Rancheria, California</option>
    <option value="Tlingit &amp; Haida">
      Central Council of the Tlingit &amp; Haida Indian Tribes
    </option>
    <option value="Chalkyitsik">Chalkyitsik Village</option>
    <option value="Cheesh-Na">Cheesh-Na Tribe</option>
    <option value="Chemehuevi">
      Chemehuevi Indian Tribe of the Chemehuevi Reservation, California
    </option>
    <option value="Cher-Ae Heights">
      Cher-Ae Heights Indian Community of the Trinidad Rancheria, California
    </option>
    <option value="Cherokee Nation">Cherokee Nation</option>
    <option value="Chevak">Chevak Native Village</option>
    <option value="Cheyenne River">Cheyenne and Arapaho Tribes, Oklahoma</option>
    <option value="Cheyenne River Sioux Tribe">
      Cheyenne River Sioux Tribe of the Cheyenne River Reservation, South Dakota
    </option>
    <option value="Chickahominy Indians-Eastern Division">
      Chickahominy Indian Tribe - Eastern Division
    </option>
    <option value="Chickahominy Indian Tribe, Inc.">
      Chickahominy Indian Tribe
    </option>
    <option value="Chickaloon">Chickaloon Native Village</option>
    <option value="Chicken Ranch">
      Chicken Ranch Rancheria of Me-Wuk Indians of California
    </option>
    <option value="Chignik Bay">Chignik Bay Tribal Council</option>
    <option value="Chignik Lake">Chignik Lake Village</option>
    <option value="Chilkat">Chilkat Indian Village (Klukwan)</option>
    <option value="Chilkoot">Chilkoot Indian Association (Haines)</option>
    <option value="Chinik">Chinik Eskimo Community (Golovin)</option>
    <option value="Chippewa-Cree">
      Chippewa Cree Indians of the Rocky Boy's Reservation, Montana
    </option>
    <option value="Chitimacha">Chitimacha Tribe of Louisiana</option>
    <option value="Chuloonawick">Chuloonawick Native Village</option>
    <option value="Circle">Circle Native Community</option>
    <option value="Citizen Potawatomi">
      Citizen Potawatomi Nation, Oklahoma
    </option>
    <option value="Cloverdale">
      Cloverdale Rancheria of Pomo Indians of California
    </option>
    <option value="Cocopah">Cocopah Tribe of Arizona</option>
    <option value="Coeur D'Alene">Coeur D'Alene Tribe</option>
    <option value="Cold Springs">
      Cold Springs Rancheria of Mono Indians of California
    </option>
    <option value="Colorado River">
      Colorado River Indian Tribes of the Colorado River Indian Reservation,
      Arizona and California
    </option>
    <option value="Comanche">Comanche Nation, Oklahoma</option>
    <option value="Confederated Salish">
      Confederated Salish and Kootenai Tribes of the Flathead Reservation
    </option>
    <option value="Confederated Yakama">
      Confederated Tribes and Bands of the Yakama Nation
    </option>
    <option value="Siletz Tribe">
      Confederated Tribes of Siletz Indians of Oregon
    </option>
    <option value="Chehalis">
      Confederated Tribes of the Chehalis Reservation
    </option>
    <option value="Confederated Colville">
      Confederated Tribes of the Colville Reservation
    </option>
    <option value="Confederated Coos">
      Confederated Tribes of the Coos, Lower Umpqua and Siuslaw Indians
    </option>
    <option value="Confederated Goshute">
      Confederated Tribes of the Goshute Reservation, Nevada and Utah
    </option>
    <option value="Grand Ronde Tribes">
      Confederated Tribes of the Grand Ronde Community of Oregon
    </option>
    <option value="Umatilla Tribe">
      Confederated Tribes of the Umatilla Indian Reservation
    </option>
    <option value="Warms Springs Tribe">
      Confederated Tribes of the Warm Springs Reservation of Oregon
    </option>
    <option value="Coquille">Coquille Indian Tribe</option>
    <option value="Coushatta">Coushatta Tribe of Louisiana</option>
    <option value="Cow Creek">Cow Creek Band of Umpqua Tribe of Indians</option>
    <option value="Cowlitz">Cowlitz Indian Tribe</option>
    <option value="Coyote Valley">
      Coyote Valley Band of Pomo Indians of California
    </option>
    <option value="Craig">Craig Tribal Association</option>
    <option value="Crow Creek">
      Crow Creek Sioux Tribe of the Crow Creek Reservation, South Dakota
    </option>
    <option value="Crow">Crow Tribe of Montana</option>
    <option value="Curyung">Curyung Tribal Council</option>
    <option value="Delaware Nation">Delaware Nation, Oklahoma</option>
    <option value="Delaware Tribe of Indians">Delaware Tribe of Indians</option>
    <option value="Douglas">Douglas Indian Association</option>
    <option value="Dry Creek">
      Dry Creek Rancheria Band of Pomo Indians, California
    </option>
    <option value="Duckwater">
      Duckwater Shoshone Tribe of the Duckwater Reservation, Nevada
    </option>
    <option value="Eastern Cherokee">Eastern Band of Cherokee Indians</option>
    <option value="Eastern Shawnee Tribe of Oklahoma">
      Eastern Shawnee Tribe of Oklahoma
    </option>
    <option value="Eastern Shoshone">
      Eastern Shoshone Tribe of the Wind River Reservation, Wyoming
    </option>
    <option value="Egegik">Egegik Village</option>
    <option value="Eklutna">Eklutna Native Village</option>
    <option value="Elem">
      Elem Indian Colony of Pomo Indians of the Sulphur Bank Rancheria, California
    </option>
    <option value="Elk Valley">Elk Valley Rancheria, California</option>
    <option value="Ely Shoshone">Ely Shoshone Tribe of Nevada</option>
    <option value="Emmonak">Emmonak Village</option>
    <option value="Enterprise">
      Enterprise Rancheria of Maidu Indians of California
    </option>
    <option value="Evansville">Evansville Village (aka Bettles Field)</option>
    <option value="Ewiiaapaayp">
      Ewiiaapaayp Band of Kumeyaay Indians, California
    </option>
    <option value="Federated Indians of Graton">
      Federated Indians of Graton Rancheria, California
    </option>
    <option value="Flandreau">
      Flandreau Santee Sioux Tribe of South Dakota
    </option>
    <option value="Forest County">
      Forest County Potawatomi Community, Wisconsin
    </option>
    <option value="Assiniboine and Gros Ventre Tribes">
      Fort Belknap Indian Community of the Fort Belknap Reservation of Montana
    </option>
    <option value="Fort Bidwell">
      Fort Bidwell Indian Community of the Fort Bidwell Reservation of California
    </option>
    <option value="Fort Independence">
      Fort Independence Indian Community of Paiute Indians of the Fort
      Independence Reservation, California
    </option>
    <option value="Fort McDermitt">
      Fort McDermitt Paiute and Shoshone Tribes of the Fort McDermitt Indian
      Reservation, Nevada and Oregon
    </option>
    <option value="Fort McDowell">Fort McDowell Yavapai Nation, Arizona</option>
    <option value="Fort Mojave">
      Fort Mojave Indian Tribe of Arizona, California &amp; Nevada
    </option>
    <option value="Fort Sill">Fort Sill Apache Tribe of Oklahoma</option>
    <option value="Galena">Galena Village (aka Louden Village)</option>
    <option value="Gila River">
      Gila River Indian Community of the Gila River Indian Reservation, Arizona
    </option>
    <option value="Grand Traverse">
      Grand Traverse Band of Ottawa and Chippewa Indians, Michigan
    </option>
    <option value="Greenville">Greenville Rancheria</option>
    <option value="Grindstone">
      Grindstone Indian Rancheria of Wintun-Wailaki Indians of California
    </option>
    <option value="Guidiville">Guidiville Rancheria of California</option>
    <option value="Gulkana">Gulkana Village Council</option>
    <option value="Habematolel">
      Habematolel Pomo of Upper Lake, California
    </option>
    <option value="Hannahville">Hannahville Indian Community, Michigan</option>
    <option value="Havasupai">
      Havasupai Tribe of the Havasupai Reservation, Arizona
    </option>
    <option value="Healy Lake">Healy Lake Village</option>
    <option value="Ho-Chunk">Ho-Chunk Nation of Wisconsin</option>
    <option value="Hoh">Hoh Indian Tribe</option>
    <option value="Holy Cross">Holy Cross Tribe</option>
    <option value="Hoonah">Hoonah Indian Association</option>
    <option value="Hoopa">Hoopa Valley Tribe, California</option>
    <option value="Hopi">Hopi Tribe of Arizona</option>
    <option value="Hopland">Hopland Band of Pomo Indians, California</option>
    <option value="Houlton">Houlton Band of Maliseet Indians</option>
    <option value="Hualapai">
      Hualapai Indian Tribe of the Hualapai Indian Reservation, Arizona
    </option>
    <option value="Hughes">Hughes Village</option>
    <option value="Huslia">Huslia Village</option>
    <option value="Hydaburg">Hydaburg Cooperative Association</option>
    <option value="Igiugig">Igiugig Village</option>
    <option value="Iipay">Iipay Nation of Santa Ysabel, California</option>
    <option value="Inaja">
      Inaja Band of Diegueno Mission Indians of the Inaja and Cosmit Reservation,
      California
    </option>
    <option value="Inupiat Community of the Arctic Slope">
      Inupiat Community of the Arctic Slope
    </option>
    <option value="Ione">Ione Band of Miwok Indians of California</option>
    <option value="Iowa of Kansas">Iowa Tribe of Kansas and Nebraska</option>
    <option value="Iowa of Oklahoma">Iowa Tribe of Oklahoma</option>
    <option value="Iqugmiut">Iqugmiut Traditional Council</option>
    <option value="Ivanof Bay Tribe">Ivanof Bay Tribe</option>
    <option value="Jackson">Jackson Band of Miwuk Indians</option>
    <option value="Jamestown">Jamestown S'Klallam Tribe</option>
    <option value="Jamul">Jamul Indian Village of California</option>
    <option value="Jena">Jena Band of Choctaw Indians</option>
    <option value="Jicarilla">Jicarilla Apache Nation, New Mexico</option>
    <option value="Kaguyuk">Kaguyak Village</option>
    <option value="Kaibab">
      Kaibab Band of Paiute Indians of the Kaibab Indian Reservation, Arizona
    </option>
    <option value="Kaktovik">Kaktovik Village (aka Barter Island)</option>
    <option value="Kalispel">
      Kalispel Indian Community of the Kalispel Reservation
    </option>
    <option value="Karuk">Karuk Tribe</option>
    <option value="Kashia">
      Kashia Band of Pomo Indians of the Stewarts Point Rancheria, California
    </option>
    <option value="Kasigluk">Kasigluk Traditional Elders Council</option>
    <option value="Kaw">Kaw Nation, Oklahoma</option>
    <option value="Kenaitze">Kenaitze Indian Tribe</option>
    <option value="Ketchikan">Ketchikan Indian Community</option>
    <option value="Keweenaw">Keweenaw Bay Indian Community, Michigan</option>
    <option value="Kialegee Tribal Town">Kialegee Tribal Town</option>
    <option value="Kickapoo of Texas">Kickapoo Traditional Tribe of Texas</option>
    <option value="Kickapoo Tribe in Kansas">
      Kickapoo Tribe of Indians of the Kickapoo Reservation in Kansas
    </option>
    <option value="Kickapoo of Oklahoma">Kickapoo Tribe of Oklahoma</option>
    <option value="King Island">King Island Native Community</option>
    <option value="King Salmon">King Salmon Tribe</option>
    <option value="Kiowa Tribe">Kiowa Indian Tribe of Oklahoma</option>
    <option value="Klamath">Klamath Tribes</option>
    <option value="Klawock">Klawock Cooperative Association</option>
    <option value="Cortina">Kletsel Dehe Band of Wintun Indians</option>
    <option value="Knik">Knik Tribe</option>
    <option value="Koi">Koi Nation of Northern California</option>
    <option value="Kokhanok">Kokhanok Village</option>
    <option value="Kootenai">Kootenai Tribe of Idaho</option>
    <option value="Koyukuk">Koyukuk Native Village</option>
    <option value="La Jolla">La Jolla Band of Luiseno Indians, California</option>
    <option value="La Posta">
      La Posta Band of Diegueno Mission Indians of the La Posta Indian
      Reservation, California
    </option>
    <option value="Lac Courte Oreilles">
      Lac Courte Oreilles Band of Lake Superior Chippewa Indians of Wisconsin
    </option>
    <option value="Lac du Flambeau">
      Lac du Flambeau Band of Lake Superior Chippewa Indians of the Lac du
      Flambeau Reservation of Wisconsin
    </option>
    <option value="Lac Vieux">
      Lac Vieux Desert Band of Lake Superior Chippewa Indians of Michigan
    </option>
    <option value="Las Vegas">
      Las Vegas Tribe of Paiute Indians of the Las Vegas Indian Colony, Nevada
    </option>
    <option value="Levelock">Levelock Village</option>
    <option value="Lime">Lime Village</option>
    <option value="Little River">
      Little River Band of Ottawa Indians, Michigan
    </option>
    <option value="Little Shell Tribe">
      Little Shell Tribe of Chippewa Indians of Montana
    </option>
    <option value="Little Traverse">
      Little Traverse Bay Bands of Odawa Indians, Michigan
    </option>
    <option value="Lone Pine">Lone Pine Paiute-Shoshone Tribe</option>
    <option value="Los Coyotes">
      Los Coyotes Band of Cahuilla and Cupeno Indians, California
    </option>
    <option value="Lovelock">
      Lovelock Paiute Tribe of the Lovelock Indian Colony, Nevada
    </option>
    <option value="Lower Brule">
      Lower Brule Sioux Tribe of the Lower Brule Reservation, South Dakota
    </option>
    <option value="Lower Elwha">Lower Elwha Tribal Community</option>
    <option value="Lower Sioux">
      Lower Sioux Indian Community in the State of Minnesota
    </option>
    <option value="Lummi">Lummi Tribe of the Lummi Reservation</option>
    <option value="Lytton">Lytton Rancheria of California</option>
    <option value="Makah">
      Makah Indian Tribe of the Makah Indian Reservation
    </option>
    <option value="Manchester">
      Manchester Band of Pomo Indians of the Manchester Rancheria, California
    </option>
    <option value="Manley Hot Springs">Manley Hot Springs Village</option>
    <option value="Manokotak">Manokotak Village</option>
    <option value="Manzanita">
      Manzanita Band of Diegueno Mission Indians of the Manzanita Reservation,
      California
    </option>
    <option value="Mashantucket Pequot">Mashantucket Pequot Indian Tribe</option>
    <option value="Mashpee">Mashpee Wampanoag Tribe</option>
    <option value="Match-e-be-nash-she-wish Band">
      Match-e-be-nash-she-wish Band of Pottawatomi Indians of Michigan
    </option>
    <option value="Mcgrath">McGrath Native Village</option>
    <option value="Mechoopda">
      Mechoopda Indian Tribe of Chico Rancheria, California
    </option>
    <option value="Menominee">Menominee Indian Tribe of Wisconsin</option>
    <option value="Mentasta">Mentasta Traditional Council</option>
    <option value="Mesa Grande">
      Mesa Grande Band of Diegueno Mission Indians of the Mesa Grande Reservation,
      California
    </option>
    <option value="Mescalero Apache">
      Mescalero Apache Tribe of the Mescalero Reservation, New Mexico
    </option>
    <option value="Metlakatla">
      Metlakatla Indian Community, Annette Island Reserve
    </option>
    <option value="Miami Tribe of Oklahoma">Miami Tribe of Oklahoma</option>
    <option value="Miccosukee">Miccosukee Tribe of Indians</option>
    <option value="Middletown">
      Middletown Rancheria of Pomo Indians of California
    </option>
    <option value="Mi'kmaq Nation">Mi'kmaq Nation</option>
    <option value="Bois Forte">
      Minnesota Chippewa Tribe - Bois Forte Band (Nett Lake)
    </option>
    <option value="Fond du Lac">
      Minnesota Chippewa Tribe - Fond du Lac Band
    </option>
    <option value="Grand Portage">
      Minnesota Chippewa Tribe - Grand Portage Band
    </option>
    <option value="Leech Lake">Minnesota Chippewa Tribe - Leech Lake Band</option>
    <option value="Mille Lacs">Minnesota Chippewa Tribe - Mille Lacs Band</option>
    <option value="White Earth">
      Minnesota Chippewa Tribe - White Earth Band
    </option>
    <option value="Minnesota Chippewa">
      Minnesota Chippewa Tribe, Minnesota
    </option>
    <option value="Mississippi Choctaw">
      Mississippi Band of Choctaw Indians
    </option>
    <option value="Moapa">
      Moapa Band of Paiute Indians of the Moapa River Indian Reservation, Nevada
    </option>
    <option value="Modoc Nation">Modoc Nation</option>
    <option value="Mohegan">Mohegan Tribe of Indians of Connecticut</option>
    <option value="Monacan Indian Nation">Monacan Indian Nation</option>
    <option value="Mooretown">
      Mooretown Rancheria of Maidu Indians of California
    </option>
    <option value="Morongo">Morongo Band of Mission Indians, California</option>
    <option value="Muckleshoot">Muckleshoot Indian Tribe</option>
    <option value="Naknek">Naknek Native Village</option>
    <option value="Nansemond Indian Tribe">Nansemond Indian Nation</option>
    <option value="Narragansett">Narragansett Indian Tribe</option>
    <option value="Afognak">Native Village of Afognak</option>
    <option value="Akhiok">Native Village of Akhiok</option>
    <option value="Akutan">Native Village of Akutan</option>
    <option value="Aleknagik">Native Village of Aleknagik</option>
    <option value="Ambler">Native Village of Ambler</option>
    <option value="Atka">Native Village of Atka</option>
    <option value="Native Village of Atqasuk">Native Village of Atqasuk</option>
    <option value="Barrow">
      Native Village of Barrow Inupiat Traditional Government
    </option>
    <option value="Belkofski">Native Village of Belkofski</option>
    <option value="Brevig Mission">Native Village of Brevig Mission</option>
    <option value="Buckland">Native Village of Buckland</option>
    <option value="Cantwell">Native Village of Cantwell</option>
    <option value="Chenega">Native Village of Chenega (aka Chanega)</option>
    <option value="Chignik Lagoon">Native Village of Chignik Lagoon</option>
    <option value="Chitina">Native Village of Chitina</option>
    <option value="Chuathbaluk">
      Native Village of Chuathbaluk (Russian Mission, Kuskokwim)
    </option>
    <option value="Council">Native Village of Council</option>
    <option value="Deering">Native Village of Deering</option>
    <option value="Diomede">Native Village of Diomede (aka Inalik)</option>
    <option value="Eagle">Native Village of Eagle</option>
    <option value="Eek">Native Village of Eek</option>
    <option value="Ekuk">Native Village of Ekuk</option>
    <option value="Ekwok">Native Village of Ekwok</option>
    <option value="Elim IRA">Native Village of Elim</option>
    <option value="Eyak">Native Village of Eyak (Cordova)</option>
    <option value="False Pass">Native Village of False Pass</option>
    <option value="Fort Yukon">Native Village of Fort Yukon</option>
    <option value="Gakona">Native Village of Gakona</option>
    <option value="Gambell">Native Village of Gambell</option>
    <option value="Georgetown">Native Village of Georgetown</option>
    <option value="Goodnews Bay">Native Village of Goodnews Bay</option>
    <option value="Hamilton">Native Village of Hamilton</option>
    <option value="Hooper Bay">Native Village of Hooper Bay</option>
    <option value="Kanatak">Native Village of Kanatak</option>
    <option value="Karluk">Native Village of Karluk</option>
    <option value="Kiana">Native Village of Kiana</option>
    <option value="Kipnuk">Native Village of Kipnuk</option>
    <option value="Kivalina">Native Village of Kivalina</option>
    <option value="Kluti Kaah">
      Native Village of Kluti Kaah (aka Copper Center)
    </option>
    <option value="Kobuk">Native Village of Kobuk</option>
    <option value="Kongiganak">Native Village of Kongiganak</option>
    <option value="Kotzebue">Native Village of Kotzebue</option>
    <option value="Koyuk">Native Village of Koyuk</option>
    <option value="Kwigillingok">Native Village of Kwigillingok</option>
    <option value="Kwinhagak">Native Village of Kwinhagak (aka Quinhagak)</option>
    <option value="Larsen Bay">Native Village of Larsen Bay</option>
    <option value="Marshall">
      Native Village of Marshall (aka Fortuna Ledge)
    </option>
    <option value="Mary's Igloo">Native Village of Mary's Igloo</option>
    <option value="Mekoryuk">Native Village of Mekoryuk</option>
    <option value="Minto">Native Village of Minto</option>
    <option value="Nanwalek">Native Village of Nanwalek (aka English Bay)</option>
    <option value="Napaimute">Native Village of Napaimute</option>
    <option value="Napakiak">Native Village of Napakiak</option>
    <option value="Napaskiak">Native Village of Napaskiak</option>
    <option value="Nelson Lagoon">Native Village of Nelson Lagoon</option>
    <option value="Nightmute">Native Village of Nightmute</option>
    <option value="Nikolski">Native Village of Nikolski</option>
    <option value="Noatak">Native Village of Noatak</option>
    <option value="Nuiqsut">Native Village of Nuiqsut (aka Nooiksut)</option>
    <option value="Nunam Iqua">Native Village of Nunam Iqua</option>
    <option value="Nunapitchuk">Native Village of Nunapitchuk</option>
    <option value="Ouzinkie">Native Village of Ouzinkie</option>
    <option value="Paimiut">Native Village of Paimiut</option>
    <option value="Perryville">Native Village of Perryville</option>
    <option value="Pilot Point">Native Village of Pilot Point</option>
    <option value="Point Hope IRA">Native Village of Point Hope</option>
    <option value="Point Lay IRA">Native Village of Point Lay</option>
    <option value="Port Graham">Native Village of Port Graham</option>
    <option value="Port Heiden">Native Village of Port Heiden</option>
    <option value="Port Lions">Native Village of Port Lions</option>
    <option value="Ruby">Native Village of Ruby</option>
    <option value="St. Michael IRA">Native Village of Saint Michael</option>
    <option value="Savoonga">Native Village of Savoonga</option>
    <option value="Scammon Bay">Native Village of Scammon Bay</option>
    <option value="Selawik">Native Village of Selawik</option>
    <option value="Shaktoolik">Native Village of Shaktoolik</option>
    <option value="Shishmaref IRA">Native Village of Shishmaref</option>
    <option value="Shungnak">Native Village of Shungnak</option>
    <option value="Stevens Village">Native Village of Stevens</option>
    <option value="Tanacross">Native Village of Tanacross</option>
    <option value="Tanana">Native Village of Tanana</option>
    <option value="Tatitlek">Native Village of Tatitlek</option>
    <option value="Tazlina">Native Village of Tazlina</option>
    <option value="Teller">Native Village of Teller</option>
    <option value="Tetlin">Native Village of Tetlin</option>
    <option value="Tuntutuliak">Native Village of Tuntutuliak</option>
    <option value="Tununak">Native Village of Tununak</option>
    <option value="Tyonek">Native Village of Tyonek</option>
    <option value="Unalakleet">Native Village of Unalakleet</option>
    <option value="Unga">Native Village of Unga</option>
    <option value="Venetie IRA">
      Native Village of Venetie Tribal Government (Arctic Village and Village of
      Venetie)
    </option>
    <option value="Wales">Native Village of Wales</option>
    <option value="White Mountain AK">Native Village of White Mountain</option>
    <option value="Navajo">Navajo Nation, Arizona, New Mexico &amp; Utah</option>
    <option value="Nenana">Nenana Native Association</option>
    <option value="New Koliganek">New Koliganek Village Council</option>
    <option value="New Stuyahok">New Stuyahok Village</option>
    <option value="Newhalen">Newhalen Village</option>
    <option value="Newtok">Newtok Village</option>
    <option value="Nez Perce">Nez Perce Tribe</option>
    <option value="Nikolai">Nikolai Village</option>
    <option value="Ninilchik">Ninilchik Village</option>
    <option value="Nisqually">Nisqually Indian Tribe</option>
    <option value="Nome">Nome Eskimo Community</option>
    <option value="Nondalton">Nondalton Village</option>
    <option value="Nooksack">Nooksack Indian Tribe</option>
    <option value="Noorvik">Noorvik Native Community</option>
    <option value="Northern Arapaho">
      Northern Arapaho Tribe of the Wind River Reservation, Wyoming
    </option>
    <option value="Northern Cheyenne">
      Northern Cheyenne Tribe of the Northern Cheyenne Indian Reservation, Montana
    </option>
    <option value="North Fork">
      Northfork Rancheria of Mono Indians of California
    </option>
    <option value="Northway">Northway Village</option>
    <option value="Northwestern Shoshone">
      Northwestern Band of the Shoshone Nation
    </option>
    <option value="Nottawaseppi Potawatomi">
      Nottawaseppi Huron Band of the Potawatomi, Michigan
    </option>
    <option value="Nulato">Nulato Village</option>
    <option value="Nunakauyarmiut">Nunakauyarmiut Tribe</option>
    <option value="Oglala Sioux">Oglala Sioux Tribe</option>
    <option value="Ohkay Owingeh">Ohkay Owingeh, New Mexico</option>
    <option value="Omaha">Omaha Tribe of Nebraska</option>
    <option value="Oneida">Oneida Indian Nation</option>
    <option value="Oneida Nation (Wisconsin)">Oneida Nation</option>
    <option value="Onondaga">Onondaga Nation</option>
    <option value="Grayling">
      Organized Village of Grayling (aka Holikachuk)
    </option>
    <option value="Kake">Organized Village of Kake</option>
    <option value="Kasaan">Organized Village of Kasaan</option>
    <option value="Kwethluk">Organized Village of Kwethluk</option>
    <option value="Saxman">Organized Village of Saxman</option>
    <option value="Orutsararmiut">
      Orutsararmiut Traditional Native Council
    </option>
    <option value="Oscarville">Oscarville Traditional Village</option>
    <option value="Otoe-Missouria">
      Otoe-Missouria Tribe of Indians, Oklahoma
    </option>
    <option value="Ottawa Tribe of Oklahoma">Ottawa Tribe of Oklahoma</option>
    <option value="Paiute of Utah">
      Paiute Indian Tribe of Utah (Cedar Band of Paiutes, Kanosh Band of Paiutes,
      Koosharem Band of Paiutes, Indian Peaks Band of Paiutes, and Shivwits Band
      of Paiutes)
    </option>
    <option value="Paiute-Shoshone">
      Paiute-Shoshone Tribe of the Fallon Reservation and Colony, Nevada
    </option>
    <option value="Pala">Pala Band of Mission Indians</option>
    <option value="Pamunkey Indian Tribe">Pamunkey Indian Tribe</option>
    <option value="Pascua Yaqui">Pascua Yaqui Tribe of Arizona</option>
    <option value="Paskenta">
      Paskenta Band of Nomlaki Indians of California
    </option>
    <option value="Passamaquoddy Indian Township">
      Passamaquoddy Tribe - Indian Township
    </option>
    <option value="Passamaquoddy Pleasant Point">
      Passamaquoddy Tribe - Pleasant Point
    </option>
    <option value="Passamaquoddy Tribe">Passamaquoddy Tribe</option>
    <option value="Pauloff Harbor">Pauloff Harbor Village</option>
    <option value="Pauma">
      Pauma Band of Luiseno Mission Indians of the Pauma &amp; Yuima Reservation,
      California
    </option>
    <option value="Pawnee">Pawnee Nation of Oklahoma</option>
    <option value="Pechanga Band of Indians">Pechanga Band of Indians</option>
    <option value="Pedro Bay">Pedro Bay Village</option>
    <option value="Penobscot">Penobscot Nation</option>
    <option value="Peoria Tribe of Indians of Oklahoma">
      Peoria Tribe of Indians of Oklahoma
    </option>
    <option value="Petersburg">Petersburg Indian Association</option>
    <option value="Picayune">
      Picayune Rancheria of Chukchansi Indians of California
    </option>
    <option value="Pilot Station">Pilot Station Traditional Village</option>
    <option value="Pinoleville">Pinoleville Pomo Nation, California</option>
    <option value="Pit River">Pit River Tribe, California</option>
    <option value="Pitka's Point">Pitka's Point Traditional Council</option>
    <option value="Platinum">Platinum Traditional Village</option>
    <option value="Poarch">Poarch Band of Creek Indians</option>
    <option value="Pokagon">
      Pokagon Band of Potawatomi Indians, Michigan and Indiana
    </option>
    <option value="Ponca of Oklahoma">Ponca Tribe of Indians of Oklahoma</option>
    <option value="Ponca of Nebraska">Ponca Tribe of Nebraska</option>
    <option value="Port Gamble">Port Gamble S'Klallam Tribe</option>
    <option value="Portage Creek">Portage Creek Village (aka Ohgsenakale)</option>
    <option value="Potter Valley">Potter Valley Tribe, California</option>
    <option value="Prairie Band">Prairie Band Potawatomi Nation</option>
    <option value="Prairie Island">
      Prairie Island Indian Community in the State of Minnesota
    </option>
    <option value="Pribilof Islands Aleut Communities">
      Pribilof Islands Aleut Communities
    </option>
    <option value="Pueblo of Acoma">Pueblo of Acoma, New Mexico</option>
    <option value="Pueblo of Cochiti">Pueblo of Cochiti, New Mexico</option>
    <option value="Pueblo of Isleta">Pueblo of Isleta, New Mexico</option>
    <option value="Pueblo of Jemez">Pueblo of Jemez, New Mexico</option>
    <option value="Pueblo of Laguna">Pueblo of Laguna, New Mexico</option>
    <option value="Pueblo of Nambe">Pueblo of Nambe, New Mexico</option>
    <option value="Pueblo of Picuris">Pueblo of Picuris, New Mexico</option>
    <option value="Pueblo of Pojoaque">Pueblo of Pojoaque, New Mexico</option>
    <option value="Pueblo of San Felipe">Pueblo of San Felipe, New Mexico</option>
    <option value="Pueblo of San Ildefonso">
      Pueblo of San Ildefonso, New Mexico
    </option>
    <option value="Pueblo of Sandia">Pueblo of Sandia, New Mexico</option>
    <option value="Pueblo of Santa Ana">Pueblo of Santa Ana, New Mexico</option>
    <option value="Pueblo of Santa Clara">
      Pueblo of Santa Clara, New Mexico
    </option>
    <option value="Pueblo of Taos">Pueblo of Taos, New Mexico</option>
    <option value="Pueblo of Tesuque">Pueblo of Tesuque, New Mexico</option>
    <option value="Pueblo of Zia">Pueblo of Zia, New Mexico</option>
    <option value="Puyallup">Puyallup Tribe of the Puyallup Reservation</option>
    <option value="Pyramid Lake">
      Pyramid Lake Paiute Tribe of the Pyramid Lake Reservation, Nevada
    </option>
    <option value="Qagan Tayagungin">Qagan Tayagungin Tribe of Sand Point</option>
    <option value="Qawalangin">Qawalangin Tribe of Unalaska</option>
    <option value="Quapaw Nation">Quapaw Nation</option>
    <option value="Quartz Valley">
      Quartz Valley Indian Community of the Quartz Valley Reservation of
      California
    </option>
    <option value="Quechan">
      Quechan Tribe of the Fort Yuma Indian Reservation, California &amp; Arizona
    </option>
    <option value="Quileute">Quileute Tribe of the Quileute Reservation</option>
    <option value="Quinault">Quinault Indian Nation</option>
    <option value="Ramah Navajo Chapter">
      Ramah Navajo Chapter of the Navajo Nation
    </option>
    <option value="Ramona">Ramona Band of Cahuilla, California</option>
    <option value="Rampart">Rampart Village</option>
    <option value="Rappahannock Tribe, Inc.">Rappahannock Tribe, Inc.</option>
    <option value="Red Cliff">
      Red Cliff Band of Lake Superior Chippewa Indians of Wisconsin
    </option>
    <option value="Red Lake">Red Lake Band of Chippewa Indians, Minnesota</option>
    <option value="Redding">Redding Rancheria, California</option>
    <option value="Redwood Valley">
      Redwood Valley or Little River Band of Pomo Indians of the Redwood Valley
      Rancheria California
    </option>
    <option value="Reno-Sparks">Reno-Sparks Indian Colony, Nevada</option>
    <option value="Resighini">Resighini Rancheria, California</option>
    <option value="Rincon">
      Rincon Band of Luiseno Mission Indians of the Rincon Reservation, California
    </option>
    <option value="Robinson">Robinson Rancheria</option>
    <option value="Rosebud">
      Rosebud Sioux Tribe of the Rosebud Indian Reservation, South Dakota
    </option>
    <option value="Round Valley">
      Round Valley Indian Tribes, Round Valley Reservation, California
    </option>
    <option value="Sac &amp; Fox Nation of Missouri in Kansas and Nebraska">
      Sac &amp; Fox Nation of Missouri in Kansas and Nebraska
    </option>
    <option value="Sac &amp; Fox Nation, Oklahoma">
      Sac &amp; Fox Nation, Oklahoma
    </option>
    <option value="Sac &amp; Fox of Mississippi">
      Sac &amp; Fox Tribe of the Mississippi in Iowa
    </option>
    <option value="Saginaw Chippewa">
      Saginaw Chippewa Indian Tribe of Michigan
    </option>
    <option value="St. George">
      Saint George Island (See Pribilof Islands Aleut Communities of St. Paul
      &amp; St. George Islands)
    </option>
    <option value="Saint Paul">
      Saint Paul Island (See Pribilof Islands Aleut Communities of St. Paul &amp;
      St. George Islands)
    </option>
    <option value="Saint Regis">Saint Regis Mohawk Tribe</option>
    <option value="Salamatof">Salamatof Tribe</option>
    <option value="Salt River">
      Salt River Pima-Maricopa Indian Community of the Salt River Reservation,
      Arizona
    </option>
    <option value="Samish">Samish Indian Nation</option>
    <option value="San Carlos">
      San Carlos Apache Tribe of the San Carlos Reservation, Arizona
    </option>
    <option value="San Juan">San Juan Southern Paiute Tribe of Arizona</option>
    <option value="San Pasqual">
      San Pasqual Band of Diegueno Mission Indians of California
    </option>
    <option value="Santa Rosa of Cahuilla">
      Santa Rosa Band of Cahuilla Indians, California
    </option>
    <option value="Santa Rosa">
      Santa Rosa Indian Community of the Santa Rosa Rancheria, California
    </option>
    <option value="Santa Ynez">
      Santa Ynez Band of Chumash Mission Indians of the Santa Ynez Reservation,
      California
    </option>
    <option value="Santee Sioux">Santee Sioux Nation, Nebraska</option>
    <option value="Santo Domingo">Santo Domingo Pueblo</option>
    <option value="Sauk-Suiattle">Sauk-Suiattle Indian Tribe</option>
    <option value="Sault Ste. Marie">
      Sault Ste. Marie Tribe of Chippewa Indians, Michigan
    </option>
    <option value="Scotts Valley">
      Scotts Valley Band of Pomo Indians of California
    </option>
    <option value="Seldovia">Seldovia Village Tribe</option>
    <option value="Seminole">Seminole Tribe of Florida</option>
    <option value="Seneca">Seneca Nation of Indians</option>
    <option value="Seneca-Cayuga Nation">Seneca-Cayuga Nation</option>
    <option value="Shageluk">Shageluk Native Village</option>
    <option value="Shakopee">
      Shakopee Mdewakanton Sioux Community of Minnesota
    </option>
    <option value="Shawnee Tribe">Shawnee Tribe</option>
    <option value="Sherwood Valley">
      Sherwood Valley Rancheria of Pomo Indians of California
    </option>
    <option value="Shingle Springs">
      Shingle Springs Band of Miwok Indians, Shingle Springs Rancheria (Verona
      Tract), California
    </option>
    <option value="Shinnecock">Shinnecock Indian Nation</option>
    <option value="Shoalwater">
      Shoalwater Bay Indian Tribe of the Shoalwater Bay Indian Reservation
    </option>
    <option value="Shoshone-Bannock">
      Shoshone-Bannock Tribes of the Fort Hall Reservation
    </option>
    <option value="Shoshone-Paiute">
      Shoshone-Paiute Tribes of the Duck Valley Reservation, Nevada
    </option>
    <option value="Sisseton-Wahpeton">
      Sisseton-Wahpeton Oyate of the Lake Traverse Reservation, South Dakota
    </option>
    <option value="Sitka">Sitka Tribe of Alaska</option>
    <option value="Skagway">Skagway Village</option>
    <option value="Skokomish">Skokomish Indian Tribe</option>
    <option value="Skull Valley">
      Skull Valley Band of Goshute Indians of Utah
    </option>
    <option value="Snoqualmie">Snoqualmie Indian Tribe</option>
    <option value="Soboba">Soboba Band of Luiseno Indians, California</option>
    <option value="Sokaogon">Sokaogon Chippewa Community, Wisconsin</option>
    <option value="South Naknek">South Naknek Village</option>
    <option value="Southern Ute">
      Southern Ute Indian Tribe of the Southern Ute Reservation, Colorado
    </option>
    <option value="Spirit Lake">Spirit Lake Tribe, North Dakota</option>
    <option value="Spokane">Spokane Tribe of the Spokane Reservation</option>
    <option value="Squaxin">
      Squaxin Island Tribe of the Squaxin Island Reservation
    </option>
    <option value="St. Croix">St. Croix Chippewa Indians of Wisconsin</option>
    <option value="Standing Rock">
      Standing Rock Sioux Tribe of North &amp; South Dakota
    </option>
    <option value="Stebbins">Stebbins Community Association</option>
    <option value="Stillaguamish">
      Stillaguamish Tribe of Indians of Washington
    </option>
    <option value="Stockbridge">Stockbridge Munsee Community, Wisconsin</option>
    <option value="Summit Lake">Summit Lake Paiute Tribe of Nevada</option>
    <option value="Sun'aq">Sun'aq Tribe of Kodiak</option>
    <option value="Suquamish">
      Suquamish Indian Tribe of the Port Madison Reservation
    </option>
    <option value="Susanville">Susanville Indian Rancheria, California</option>
    <option value="Swinomish">Swinomish Indian Tribal Community</option>
    <option value="Sycuan">Sycuan Band of the Kumeyaay Nation</option>
    <option value="Table Mountain">Table Mountain Rancheria</option>
    <option value="Takotna">Takotna Village</option>
    <option value="Tangirnaq">Tangirnaq Native Village</option>
    <option value="Tejon">Tejon Indian Tribe</option>
    <option value="Telida">Telida Village</option>
    <option value="Te-Moak">
      Te-Moak Tribe of Western Shoshone Indians of Nevada (Four constituent bands:
      Battle Mountain Band; Elko Band; South Fork Band and Wells Band)
    </option>
    <option value="Chickasaw Nation">The Chickasaw Nation</option>
    <option value="The Choctaw Nation of Oklahoma">
      The Choctaw Nation of Oklahoma
    </option>
    <option value="The Muscogee (Creek) Nation">
      The Muscogee (Creek) Nation
    </option>
    <option value="The Osage Nation">The Osage Nation</option>
    <option value="The Seminole Nation  of Oklahoma">
      The Seminole Nation of Oklahoma
    </option>
    <option value="Thlopthlocco Tribal Town">Thlopthlocco Tribal Town</option>
    <option value="Three Affiliated">
      Three Affiliated Tribes of the Fort Berthold Reservation, North Dakota
    </option>
    <option value="Timbi-sha Shoshone">Timbisha Shoshone Tribe</option>
    <option value="Tohono O'odham">Tohono O'odham Nation of Arizona</option>
    <option value="Tolowa Dee-ni'">Tolowa Dee-ni' Nation</option>
    <option value="Tonawanda">Tonawanda Band of Seneca</option>
    <option value="Tonkawa">Tonkawa Tribe of Indians of Oklahoma</option>
    <option value="Tonto Apache">Tonto Apache Tribe of Arizona</option>
    <option value="Torres Martinez">
      Torres Martinez Desert Cahuilla Indians, California
    </option>
    <option value="Togiak">Traditional Village of Togiak</option>
    <option value="Tulalip">Tulalip Tribes of Washington</option>
    <option value="Tule River">
      Tule River Indian Tribe of the Tule River Reservation, California
    </option>
    <option value="Tuluksak">Tuluksak Native Community</option>
    <option value="Tunica-Biloxi">Tunica-Biloxi Indian Tribe</option>
    <option value="Tuolumne">
      Tuolumne Band of Me-Wuk Indians of the Tuolumne Rancheria of California
    </option>
    <option value="Turtle Mountain">
      Turtle Mountain Band of Chippewa Indians of North Dakota
    </option>
    <option value="Tuscarora">Tuscarora Nation</option>
    <option value="Twenty-Nine Palms">
      Twenty-Nine Palms Band of Mission Indians of California
    </option>
    <option value="Twin Hills">Twin Hills Village</option>
    <option value="Ugashik">Ugashik Village</option>
    <option value="Umkumiut">Umkumiut Native Village</option>
    <option value="United Auburn">
      United Auburn Indian Community of the Auburn Rancheria of California
    </option>
    <option value="United Keetoowah Band of Cherokee Indians in Oklahoma">
      United Keetoowah Band of Cherokee Indians in Oklahoma
    </option>
    <option value="Upper Mattaponi Tribe">Upper Mattaponi Tribe</option>
    <option value="Upper Sioux">Upper Sioux Community, Minnesota</option>
    <option value="Upper Skagit">Upper Skagit Indian Tribe</option>
    <option value="Ute">
      Ute Indian Tribe of the Uintah &amp; Ouray Reservation, Utah
    </option>
    <option value="Ute Mountain Ute">Ute Mountain Ute Tribe</option>
    <option value="Benton">
      Utu Utu Gwaitu Paiute Tribe of the Benton Paiute Reservation, California
    </option>
    <option value="Alakanuk">Village of Alakanuk</option>
    <option value="Anaktuvuk Pass">Village of Anaktuvuk Pass</option>
    <option value="Aniak">Village of Aniak</option>
    <option value="Atmautluak">Village of Atmautluak</option>
    <option value="Bill Moore's Slough">Village of Bill Moore's Slough</option>
    <option value="Chefornak">Village of Chefornak</option>
    <option value="Clark's Point">Village of Clarks Point</option>
    <option value="Crooked Creek">Village of Crooked Creek</option>
    <option value="Dot Lake">Village of Dot Lake</option>
    <option value="Iliamna">Village of Iliamna</option>
    <option value="Kalskag">Village of Kalskag</option>
    <option value="Kaltag">Village of Kaltag</option>
    <option value="Kotlik">Village of Kotlik</option>
    <option value="Lower Kalskag">Village of Lower Kalskag</option>
    <option value="Ohogamiut">Village of Ohogamiut</option>
    <option value="Red Devil">Village of Red Devil</option>
    <option value="Sleetmute">Village of Sleetmute</option>
    <option value="Solomon">Village of Solomon</option>
    <option value="Stony River">Village of Stony River</option>
    <option value="Venetie">
      Village of Venetie (See Native Village of Venetie Tribal Government)
    </option>
    <option value="Wainwright">Village of Wainwright</option>
    <option value="Walker River">
      Walker River Paiute Tribe of the Walker River Reservation, Nevada
    </option>
    <option value="Wampanoag">Wampanoag Tribe of Gay Head (Aquinnah)</option>
    <option value="Washoe">
      Washoe Tribe of Nevada &amp; California (Carson Colony, Dresslerville
      Colony, Woodfords Community, Stewart Community, &amp; Washoe Ranches)
    </option>
    <option value="White Mountain">
      White Mountain Apache Tribe of the Fort Apache Reservation, Arizona
    </option>
    <option value="Wichita">
      Wichita and Affiliated Tribes (Wichita, Keechi, Waco &amp; Tawakonie),
      Oklahoma
    </option>
    <option value="Wilton">Wilton Rancheria, California</option>
    <option value="Winnebago">Winnebago Tribe of Nebraska</option>
    <option value="Winnemucca">Winnemucca Indian Colony of Nevada</option>
    <option value="Wiyot">Wiyot Tribe, California</option>
    <option value="Wrangell">Wrangell Cooperative Association</option>
    <option value="Wyandotte Nation">Wyandotte Nation</option>
    <option value="Yakutat">Yakutat Tlingit Tribe</option>
    <option value="Yankton">Yankton Sioux Tribe of South Dakota</option>
    <option value="Yavapai-Apache">
      Yavapai-Apache Nation of the Camp Verde Indian Reservation, Arizona
    </option>
    <option value="Yavapai-Prescott">Yavapai-Prescott Indian Tribe</option>
    <option value="Yerington">
      Yerington Paiute Tribe of the Yerington Colony and Campbell Ranch, Nevada
    </option>
    <option value="Yocha Dehe">Yocha Dehe Wintun Nation, California</option>
    <option value="Yomba Shoshone">
      Yomba Shoshone Tribe of the Yomba Reservation, Nevada
    </option>
    <option value="Ysleta Del Sur">Ysleta del Sur Pueblo</option>
    <option value="Yuhaaviatam of San Manuel Nation">
      Yuhaaviatam of San Manuel Nation
    </option>
    <option value="Andreafski">Yupiit of Andreafski</option>
    <option value="Yurok">
      Yurok Tribe of the Yurok Reservation, California
    </option>
    <option value="Pueblo of Zuni">
      Zuni Tribe of the Zuni Reservation, New Mexico
    </option>
    <option value="Other">Other</option>
  </select>
                                                        </div>
                                                        <div class="col-lg-3 residentialTribalIdentificationForm" style="display: none;" >
                                                            <label for="residentialothertribalidentificationform" class="mid">d. other Local/Tribal description</label>
                                                            <input type="text" id="residentialothertribalidentificationform" class="form-control"
                                                                name="other Local Tribal description" placeholder="Enter other Local/Tribal description" >
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <label for="residentialimageidentificationform" class="mid">51. Identifying document image &nbsp; <span  style="color:red">*</span> </label>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                            <input type="file" id="residentialimageidentificationform" class="form-control" name="Identifying document image" accept="image/*">
                                                            <button type="button" class="ms-5 btn btn-danger residentialimagebtn">Remove </button>
                                                        </div></div>
                                                        </div>
                                                        </div>
  
                                                </div>
                                                </div>
                                                </div>
                                          </div>
                                          <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                          <div class="card h-100 mt-5 ordersummarybox" >
                                            <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Order Summary - Fee Information</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="media-body row" id="ordersummary">
                                                    <div class="col-lg-12 pt-5 pb-5">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="col-lg-12 mb-5"> 
                                                                <label for="submitfirstname" class="mid">First Name &nbsp; <span style="color:red">*</span></label>
                                                                    <input type="text" id="submitfirstname" class="form-control" name="First Name" placeholder="Enter First name">
                                                                    <label for="submitlasttname" class="mid">Last Name &nbsp; <span style="color:red">*</span></label>
                                                                    <input type="text" id="submitlasttname" class="form-control" name="Last Name" placeholder="Enter Last name">
                                                                    <label for="submitphone" class="mid">Phone &nbsp; <span style="color:red">*</span></label>
                                                                    <input type="tel" id="phone" class="form-control" name="phone" placeholder="Enter Phone">
                                                                    <label for="submitemail" class="mid">Email &nbsp; <span style="color:red">*</span></label>
                                                                    <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email">
                                                            </div>
                                                        </div>
                                                    </div>

                                                        <div class="col-lg-12 pt-5 pb-5">
                                                    <div class="alert alert-primary mt-5 d-none">
                                                            <h4>You'll Pay: <span id="totalpricing"
                                                                    name="totalpricing">$154.315</span></h4>
                                                            <div class="d-none">
                                                              <input type="text" id="service" name="service" value="BOI Reporting Service" readonly>
                                                              <input type="text" id="authpricing" name="authpricing" value="154.315" readonly></div>
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
  
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">State Filing: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="statefeeprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">Expedited Services: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="expeditedprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">EIN Tax ID Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="eintaxidprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">PF Resident Agent Fee (per year):
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="pfresidentfee">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">S CORP Election Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="scorpelectionprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">Corporate/LLC KIT Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span id="llckitprice">$0.00</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display: none;">
                                                                <td>
                                                                    <p class="mb-3">Plain Copy Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="plaincopyprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr class="d-none">
                                                                <td>
                                                                    <p class="mb-3">Certified Copy Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="certifiedprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display: none;">
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
                                                                            id="totalpricing2">$154.315</span></h2>
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
                                                                <button type="submit" class="btn btn-success" data-bs-toggle="modal"  data-bs-target="#upgradeModal" 
                                                                    data-package-id="9" 
                                                                    data-package-name="BOI REPORTING"
                                                                    data-package-price="154.315" 
                                                                    id="boiformvalidate">Pay Now to Submit
                                                                    Application</button>
                                                            </div>
                                                            <div class="my-2 col-md-12 p-0"><img
                                                                    src="https://promptfilings.com/wp-content/themes/astra/assets/authnet/authorizemerchant.jpg"
                                                                    alt="Authorize.net Merchant">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          </form>
                                        </div></div>
                                        <div class="col-md-12 mt-3 p-5"><small style="font-size:13px">The information provided by PromptFilings.com for BOI (Beneficial Ownership Information) Reporting is intended for general informational purposes only and should not be construed as legal, financial, or tax advice. While we strive to ensure the accuracy and reliability of the information presented, PromptFilings.com cannot guarantee the completeness or timeliness of the content. Users are encouraged to consult with professional legal or financial advisors regarding their specific BOI reporting obligations and compliance requirements. PromptFilings.com assumes no liability for any errors, omissions, or actions taken based on the information provided.</small></div> 
                                        
                         </div>
                    </div>
                     <div class="formpreview column col-12 d-none">
                        <h4>Pleaese Review Your BOI Reporting Application</h4>
                        <iframe class="pdf-preview" id="pdfPreviewboi"
                            src="" type="application/pdf" width="100%"
                            height="600">
                        </iframe>
                        <img src="" id="residentialimageidentificationimg" alt="image">
                        <img src="" id="imageidentificationimg" alt="image">
                    </div>
               
                    <div class="modal fade formarea" id="upgradeModal" tabindex="-1" aria-labelledby="upgradeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-body">
            <div class="d-flex align-items-start justify-content-start">

            <div class="col-md-5 cardside">
              <small>You'll Pay</small>
              <h4  class="payamount" id="amount2" name="amount2"></h4>
              <p><small>Pay with Credit/Debit Card Fee "3.5% plus 10c" (a non-refundable portal processing fee applies)</small></p>
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
                    <input type="hidden" id="package_name" name="package_name" value="BOI Reporting">
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
                        <input type="number" class="form-control" id="amount" name="amount" required readonly>
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
  <div class="exemptentitypopup p-4" style="display: none;">
    <div class="popupcontent">
    <h3>Exemption Entity Confirmation</h3>
    <p class="my-4">Select this box to clear and disable all fields related to the Reporting Company, Company Applicant, and Beneficial Owner.</p>
    <button type="button" class="btn btn-primary" id="exemptentitypopupbbtn">Okay</button>
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
<script>
document.getElementById('reviewapplicationn').addEventListener('click', function(event) {

// Get the form and modal elements
const modal = document.getElementById('reviewModal');
const modalContent = document.getElementById('modalContent');

// Get all form fields except those with the id="authpricing"
const formFields = document.querySelectorAll("#boiForm input:not(#confidetails input):not(#authpricing), #boiForm select:not([disabled]):not(#authpricing), #boiForm textarea:not(#confidetails textarea):not(#authpricing)");

var formein = document.getElementById("boiForm");

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
</script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   <script defer>var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)});</script>		
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://unpkg.com/pdf-lib/dist/pdf-lib.min.js"></script>
<script>
// Step 1: Validate Form
document.getElementById("boiformvalidate").addEventListener("click", function(event) {
    var formein = document.getElementById("boiForm");
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
        // Step 2: Validation Confirmed, Update PDF
        generatePDF();  // Generate the PDF document
    }
});


document.querySelector(".formsubmission").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this);

    // Save file inputs to localStorage
    var residentialFile = document.querySelector('#residentialimageidentificationform').files[0];
    var identificationFile = document.querySelector('#imageidentificationform').files[0];

    // Function to update the image source
    function updateImageSrc(imageElementId, file) {
        if (file) {
            var reader = new FileReader();
            reader.onload = function () {
                // Save the image to localStorage
                localStorage.setItem(imageElementId + 'Image', reader.result);
                // Get the image element
                var imgElement = document.querySelector(`#${imageElementId}`);
                
                // If the img element's src is empty or doesn't exist, replace it with the new image
                if (!imgElement.src || imgElement.src === "") {
                    imgElement.src = reader.result;
                } else {
                    // Replace the existing image if there is one
                    imgElement.src = reader.result;
                }
            };
            reader.readAsDataURL(file);
        }
    }

    // Update images for residential and identification files
    updateImageSrc('residentialimageidentificationimg', residentialFile);
    updateImageSrc('imageidentificationimg', identificationFile);

    // Start processing the PDF generation
    var blobUrl = document.getElementById('pdfPreviewboi').getAttribute('src');

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

async function generatePDF() { 
    
    const legalnamepriorreportname = document.getElementById('legalnamepriorreportname').value;   
    const legalnamepriorreporttax = document.getElementById('legalnamepriorreporttax').value;   
    const legalnamepriorreporttaxnumber = document.getElementById('legalnamepriorreporttaxnumber').value;   
    const legalnamepriorreporttaxcountry = document.getElementById('legalnamepriorreporttaxcountry').value;   
    const dateprepared = document.getElementById('dateprepared').value;   
    const reportingcompanylegalname = document.getElementById('reportingcompanylegalname').value;   
    const reportingcompanyalternatename = document.getElementById('reportingcompanyalternatename').value;   
    const taxidtype = document.getElementById('taxidtype').value;   
    const taxidnumber = document.getElementById('taxidnumber').value;   
    const taxidcountryformation = document.getElementById('taxidcountryformation').value;   
    const countryformation = document.getElementById('countryformation').value;   
    const stateofformation = document.getElementById('stateofformation').value;   
    const tribaljurisdiction = document.getElementById('tribaljurisdiction').value;
    const nameofothertribe = document.getElementById('nameofothertribe').value;
    const currentaddress = document.getElementById('currentaddress').value;   
    const currentcity = document.getElementById('currentcity').value;   
    const currentusteritory = document.getElementById('currentusteritory').value;  
    const currentstate = document.getElementById('currentstate').value;
    const currentzip = document.getElementById('currentzip').value;   
     const companyapplicantfincenid = document.getElementById('companyapplicantfincenid').value;   
    const companyapplicantindividualname = document.getElementById('companyapplicantindividualname').value;   
    const companyapplicantfirstname = document.getElementById('companyapplicantfirstname').value;   
    const companyapplicantmiddlename = document.getElementById('companyapplicantmiddlename').value;   
    const companyapplicantsuffix = document.getElementById('companyapplicantsuffix').value;   
    const applicantbirthMo = document.getElementById('applicantbirthMo').value;   
    const applicantbirthDay = document.getElementById('applicantbirthDay').value;   
    const applicantbirthYEAR = document.getElementById('applicantbirthYEAR').value;   
    const typecurrentaddress = document.getElementById('typecurrentaddress').value;   
    const typecurrentaddresscity = document.getElementById('typecurrentaddresscity').value;   
    const typecurrentaddressjuridiction = document.getElementById('typecurrentaddressjuridiction').value;   
    const typecurrentaddressstate = document.getElementById('typecurrentaddressstate').value;   
    const typecurrentaddresszip = document.getElementById('typecurrentaddresszip').value;   
    const formidentificationtype = document.getElementById('formidentificationtype').value;   
    const formidentificationtypenumber = document.getElementById('formidentificationtypenumber').value;   
    const countryidentificationform = document.getElementById('countryidentificationform').value;   
    const stateofidentificationform = document.getElementById('stateofidentificationform').value;   
    const tribalidentificationform = document.getElementById('tribalidentificationform').value;   
    const othertribalidentificationform = document.getElementById('othertribalidentificationform').value;   
    const imageidentificationform = document.getElementById('imageidentificationform').value;   
    const beneficialownerfincenid = document.getElementById('beneficialownerfincenid').value;   
    const legalnameindividualname = document.getElementById('legalnameindividualname').value; 
    const legalnameindividualfirstname = document.getElementById('legalnameindividualfirstname').value; 
    const legalnameindividualmiddlename = document.getElementById('legalnameindividualmiddlename').value; 
    const legalnameindividualsuffix = document.getElementById('legalnameindividualsuffix').value; 

    const legalnameindividualMo = document.getElementById('legalnameindividualMo').value;   
    const legalnameindividualDay = document.getElementById('legalnameindividualDay').value;   
    const legalnameindividualYEAR = document.getElementById('legalnameindividualYEAR').value;   
    const legalresidentialaddress = document.getElementById('legalresidentialaddress').value;   
    const legalresidentialaddresscity = document.getElementById('legalresidentialaddresscity').value;   
    const legalresidentialaddressjuridiction = document.getElementById('legalresidentialaddressjuridiction').value;   
    const legalresidentialsstate = document.getElementById('legalresidentialsstate').value;   
    const legalresidentialaddresszip = document.getElementById('legalresidentialaddresszip').value;   
    const residentialformidentificationtype = document.getElementById('residentialformidentificationtype').value;   
    const residentialformidentificationnumber = document.getElementById('residentialformidentificationnumber').value;   
    const residentialcountryidentificationform = document.getElementById('residentialcountryidentificationform').value;   
    const residentialstateofidentificationform = document.getElementById('residentialstateofidentificationform').value;   
    const residentialTribalIdentificationForm = document.getElementById('residentialTribalIdentificationForm').value;  
    const residentialothertribalidentificationform = document.getElementById('residentialothertribalidentificationform').value;  
    const residentialimageidentificationform = document.getElementById('residentialimageidentificationform').value;   
    const submitfirstname = document.getElementById('submitfirstname').value;   
    const submitlasttname = document.getElementById('submitlasttname').value;   
    const phone = document.getElementById('phone').value;   
    const email = document.getElementById('email').value;

  
  
    const receivefinCEN = document.querySelector('input[name="Receive FinCEN"]:checked').value; 
    const foriegnpooled = document.querySelector('input[name="Foriegn Pooled Investment Vehicle"]:checked').value; 
    const existingReportingCompanyCheckbox = document.querySelector('input[name="Existing reporting company"]:checked');
    const typeoffiling = document.querySelector('input[name="Type of Filing"]:checked').value; 
    const addresstype = document.querySelector('input[name="Address Type"]:checked').value; 
    const parentguardianCheckbox = document.querySelector('input[name="Parent Guardian information instead of minor child"]:checked');
    const exemptentityCheckbox = document.querySelector('input[name="Exempt Entity"]:checked');  

   


  
  // Check if PDF document is loaded
  if (!pdfDoc) {
    const url = '/img/boi-reporting.pdf';
    const existingPdfBytes = await fetch(url).then(res => res.arrayBuffer());
    pdfDoc = await PDFDocument.load(existingPdfBytes);
  }

  // Embed the Helvetica font
  const helveticaFont = await pdfDoc.embedFont(StandardFonts.Helvetica);

  // Get the first page of the document
  const pages = pdfDoc.getPages();
  const firstPage = pages[0];
  const secondPage = pages[1];
  const thirdPage = pages[2];
  
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



   firstPage.drawText(`${legalnamepriorreportname}`, {
    x: 216,
    y: 581, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  firstPage.drawText(`${legalnamepriorreporttax}`, {
    x: 216,
    y: 562, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  firstPage.drawText(`${legalnamepriorreporttaxnumber}`, {
    x: 216,
    y: 540, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  firstPage.drawText(`${legalnamepriorreporttaxcountry}`, {
    x: 216,
    y: 520, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  firstPage.drawText(`${dateprepared}`, {
    x: 216,
    y: 501, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  firstPage.drawText(`${reportingcompanylegalname}`, {
    x: 247,
    y: 375, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  firstPage.drawText(`${reportingcompanyalternatename}`, {
    x: 247,
    y: 355, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${taxidtype}`, {
    x: 247,
    y: 313, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${taxidnumber}`, {
    x: 247,
    y: 295, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${taxidcountryformation}`, {
    x: 247,
    y: 274, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${countryformation}`, {
    x: 247,
    y: 231, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${stateofformation}`, {
    x: 247,
    y: 190, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${tribaljurisdiction}`, {
    x: 247,
    y: 171, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  firstPage.drawText(`${nameofothertribe}`, {
    x: 247,
    y: 152, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${currentaddress}`, {
    x: 237,
    y: 778, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${currentcity}`, {
    x: 237,
    y: 759, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${currentusteritory}`, {
    x: 237,
    y: 739, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${currentstate}`, {
    x: 237,
    y: 718, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${currentzip}`, {
    x: 237,
    y: 699, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 





  secondPage.drawText(`${companyapplicantfincenid}`, {
    x: 237,
    y: 585, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 





  secondPage.drawText(`${companyapplicantindividualname}`, {
    x: 237,
    y: 552, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 




  secondPage.drawText(`${companyapplicantfirstname}`, {
    x: 237,
    y: 531, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${companyapplicantmiddlename}`, {
    x: 237,
    y: 512, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${companyapplicantsuffix}`, {
    x: 237,
    y: 492, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${applicantbirthMo}`, {
    x: 237,
    y: 473, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${applicantbirthDay}`, {
    x: 253,
    y: 473, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${applicantbirthYEAR}`, {
    x: 258,
    y: 473, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${typecurrentaddress}`, {
    x: 237,
    y: 410, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${typecurrentaddresscity}`, {
    x: 237,
    y: 388, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${typecurrentaddressjuridiction}`, {
    x: 237,
    y: 369, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${typecurrentaddressstate}`, {
    x: 237,
    y: 349, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${typecurrentaddresszip}`, {
    x: 237,
    y: 330, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  secondPage.drawText(`${formidentificationtype}`, {
    x: 237,
    y: 266, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 




  secondPage.drawText(`${formidentificationtypenumber}`, {
    x: 237,
    y: 248, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  

  secondPage.drawText(`${countryidentificationform}`, {
    x: 237,
    y: 208, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 




  secondPage.drawText(`${stateofidentificationform}`, {
    x: 237,
    y: 187, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${tribalidentificationform}`, {
    x: 237,
    y: 169, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  secondPage.drawText(`${othertribalidentificationform}`, {
    x: 237,
    y: 148, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 

  thirdPage.drawText(`${beneficialownerfincenid}`, {
    x: 231,
    y: 728, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 


  thirdPage.drawText(`${legalnameindividualname}`, {
    x: 231,
    y: 645, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 





  thirdPage.drawText(`${legalnameindividualfirstname}`, {
    x: 231,
    y: 622, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 





  thirdPage.drawText(`${legalnameindividualmiddlename}`, {
    x: 231,
    y: 603, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 





  thirdPage.drawText(`${legalnameindividualsuffix}`, {
    x: 231,
    y: 583, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 





  thirdPage.drawText(`${legalnameindividualMo}`, {
    x: 231,
    y: 563, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalnameindividualDay}`, {
    x: 247,
    y: 563, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalnameindividualYEAR}`, {
    x: 272,
    y: 563, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalresidentialaddress}`, {
    x: 231,
    y: 524, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalresidentialaddresscity}`, {
    x: 231,
    y: 505, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalresidentialaddressjuridiction}`, {
    x: 231,
    y: 485, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalresidentialsstate}`, {
    x: 231,
    y: 466, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${legalresidentialaddresszip}`, {
    x: 231,
    y: 445, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${residentialformidentificationtype}`, {
    x: 231,
    y: 406, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${residentialformidentificationnumber}`, {
    x: 231,
    y: 386, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${residentialcountryidentificationform}`, {
    x: 231,
    y: 346, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${residentialstateofidentificationform}`, {
    x: 231,
    y: 327, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${residentialTribalIdentificationForm}`, {
    x: 231,
    y: 307, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 




  thirdPage.drawText(`${residentialothertribalidentificationform}`, {
    x: 231,
    y: 288, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${residentialimageidentificationform}`, {
    x: 231,
    y: 270, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${submitfirstname}`, {
    x: 231,
    y: 239, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${submitlasttname}`, {
    x: 231,
    y: 219, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${phone}`, {
    x: 231,
    y: 200, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  thirdPage.drawText(`${email}`, {
    x: 231,
    y: 180, // Adjusted position to be closer to the bottom
    size: 9, // Adjusted font size
    font: helveticaFont,
    color: rgb(0, 0, 0.3),
    letterSpacing: LS1, 
  }); 



  if (existingReportingCompanyCheckbox) {
  // Draw the image if the checkbox is checked
  secondPage.drawImage(`${existingreportingcompany}`, iconImage, {
    x: 235,
    y: 680, // Adjusted position to be closer to the bottom
    width: 6, // Adjusted width of the image
    height: 6, // Adjusted height of the image
  });
} else {
}



if (parentguardianCheckbox) {
  // Draw the image if the checkbox is checked
  thirdPage.drawImage(`${parentguardian}`, iconImage, {
    x: 235,
    y: 680, // Adjusted position to be closer to the bottom
    width: 6, // Adjusted width of the image
    height: 6, // Adjusted height of the image
  });
} else {
}
  
 



if (exemptentityCheckbox) {
  // Draw the image if the checkbox is checked
  thirdPage.drawImage(`${exemptentity}`, iconImage, {
    x: 231,
    y: 686, // Adjusted position to be closer to the bottom
    width: 6, // Adjusted width of the image
    height: 6, // Adjusted height of the image
  });
} else {
}
  
 
  
  
 


 // Load a font that supports the checkbox symbol
//const fontBytes = await fetch('path_to_checkbox_font.ttf').then(res => res.arrayBuffer());
//const checkboxFont = await pdfDoc.embedFont(pdfBytes);

const iconImageBytes = await fetch('/img/check2.png').then(res => res.arrayBuffer());
const iconImage = await pdfDoc.embedPng(iconImageBytes);
//const iconImage2 = await pdfDoc.embedPng(iconImageBytes);

let InitialReportYCoordinate;
let InitialReportXCoordinate;

if (typeoffiling === "Initial Report") {
  InitialReportXCoordinate = 210;
  InitialReportYCoordinate = 681;
} else if (typeoffiling === "Correct Prior Report") {
  InitialReportXCoordinate = 210;
  InitialReportYCoordinate = 662;
} else if (typeoffiling === "Update Prior Report") {
  InitialReportXCoordinate = 210;
  InitialReportYCoordinate = 641;
} else if (typeoffiling === "Newly Exempt Entity") {
  InitialReportXCoordinate = 210;
  InitialReportYCoordinate = 622;
}

firstPage.drawImage(iconImage, {
  x: InitialReportXCoordinate,
  y: InitialReportYCoordinate, // Adjusted position based on ITN type
  width: 6, // Adjusted width of the image
  height: 6, // Adjusted height of the image
});

let receivefinCENYCoordinate;
let receivefinCENXCoordinate;

if (receivefinCEN === "YES") {
    receivefinCENXCoordinate = 244;
    receivefinCENYCoordinate = 436;
} else if (receivefinCEN === "NO") {
    receivefinCENXCoordinate = 244;
    receivefinCENYCoordinate = 416;
}

firstPage.drawImage(iconImage, {
  x: receivefinCENXCoordinate,
  y: receivefinCENYCoordinate, // Adjusted position based on ITN type
  width: 6, // Adjusted width of the image
  height: 6, // Adjusted height of the image
});
  

let addresstypeYCoordinate;
let addresstypeXCoordinate;

if (addresstype === "Business Address") {
    addresstypeXCoordinate = 230;
    addresstypeYCoordinate = 430;
} else if (addresstype === "Residential Address") {
    addresstypeXCoordinate = 324;
    addresstypeYCoordinate = 430;
}

secondPage.drawImage(iconImage, {
  x: addresstypeXCoordinate,
  y: addresstypeYCoordinate, // Adjusted position based on ITN type
  width: 6, // Adjusted width of the image
  height: 6, // Adjusted height of the image
});


async function handleImageInput(inputId, pageIndex) {
    const fileInput = document.getElementById(inputId);

    // Ensure the input exists and has a file selected
    if (fileInput && fileInput.files.length > 0) {
        const file = fileInput.files[0]; // Retrieve the selected file
        console.log(`File attached: ${file.name}`);

        if (file.type.startsWith("image/")) {
            const imageBytes = await file.arrayBuffer();

            // Embed the image into the PDF
            let image;
            if (file.type === "image/png") {
                image = await pdfDoc.embedPng(imageBytes);
            } else if (file.type === "image/jpeg" || file.type === "image/jpg") {
                image = await pdfDoc.embedJpg(imageBytes);
            } else {
                console.warn(`Unsupported image format: ${file.type}`);
                return;
            }

            // Ensure the page exists
            const pages = pdfDoc.getPages();
            if (pageIndex < pages.length) {
                const targetPage = pages[pageIndex];

                // Calculate position and size to fit the image on the page
                const { width, height } = targetPage.getSize();
                const imageWidth = Math.min(image.width, width);
                const imageHeight = (image.height / image.width) * imageWidth;

                // Center the image on the page
                const x = (width - imageWidth) / 2;
                const y = (height - imageHeight) / 2;

                // Draw the image on the target page
                targetPage.drawImage(image, {
                    x,
                    y,
                    width: imageWidth,
                    height: imageHeight,
                });

                console.log(`Image added to page ${pageIndex + 1} successfully!`);
            } else {
                console.error(`Page index ${pageIndex} does not exist in the PDF.`);
            }
        } else {
            console.error("Selected file is not an image.");
        }
    } else {
        console.error("No file selected.");
    }
}

// Example usage for two inputs, adding images to pages 4 and 5
document.getElementById("imageidentificationform").addEventListener("change", async () => {
    await handleImageInput("imageidentificationform", 3); // Add to page 4 (zero-indexed)
});

document.getElementById("residentialimageidentificationform").addEventListener("change", async () => {
    await handleImageInput("residentialimageidentificationform", 4); // Add to page 5 (zero-indexed)
});


  // Update #newitn with check icon if checkbox is checked
 // const newitn = document.getElementById('newitn');
 // newitn.innerHTML = checkbox ? '&#10003;' : '';

  // Update PDF preview
  const pdfBytes = await pdfDoc.save();
  const pdfPreview = document.getElementById('pdfPreviewboi');
  pdfPreview.src = URL.createObjectURL(new Blob([pdfBytes], { type: 'application/pdf' }));

  // Enable download button
  //const downloadBtn = document.getElementById('downloadBtn');
  //downloadBtn.disabled = false;

  // Store updated PDF bytes
  window.updatedPdfBytes = pdfBytes;

}

async function printPdfein() {
  const pdfPreview = document.getElementById('pdfPreviewboi');
  pdfPreview.contentWindow.print();
}


/*
async function downloadPdf() {
  // Load the updated PDF bytes
  const pdfBytes = window.updatedPdfBytes;

  // Create a new PDF document from the bytes
  const pdfDoc = await PDFDocument.load(pdfBytes);
 
  // Save the flattened PDF bytes
  const flattenedPdfBytes = await pdfDoc.save();

  // Download the flattened PDF
  const blob = new Blob([flattenedPdfBytes], { type: 'application/pdf' });
  const link = document.createElement('a');
  link.href = URL.createObjectURL(blob);
  link.download = 'flattened_pdf.pdf';
  link.click();
}
*/


/*
async function downloadPdf() {
  // Load the updated PDF bytes
  const pdfBytes = window.updatedPdfBytes;

  // Create a new PDF document from the bytes
  const pdfDoc = await PDFDocument.load(pdfBytes);

  // Save the flattened PDF bytes
  const flattenedPdfBytes = await pdfDoc.save();

  // Download the flattened PDF
  const blob = new Blob([flattenedPdfBytes], { type: 'application/pdf' });
  const link = document.createElement('a');
  link.href = URL.createObjectURL(blob);
  link.download = 'flattened_pdf.pdf';
  link.click();
}
*/

 
                 
                 
                 
                 

                  // Validation for both file input fields
document.getElementById("imageidentificationform").addEventListener("change", function () {
    const fileInput = this;
    const file = fileInput.files[0];

    if (file && !file.type.startsWith("image/")) {
        alert("Only image files are allowed. Please select a valid image.");
        fileInput.value = ""; // Clear the invalid file
    }
});

document.getElementById("residentialimageidentificationform").addEventListener("change", function () {
    const fileInput = this;
    const file = fileInput.files[0];

    if (file && !file.type.startsWith("image/")) {
        alert("Only image files are allowed. Please select a valid image.");
        fileInput.value = ""; // Clear the invalid file
    }
});


</script>
<script defer>
        // Set today's date in MM/DD/YYYY format
        const today = new Date();
        const formattedDate = (today.getMonth() + 1).toString().padStart(2, '0') + '/' +
                              today.getDate().toString().padStart(2, '0') + '/' +
                              today.getFullYear();
        document.getElementById('dateprepared').value = formattedDate;
    
        // Function to update the visibility of the reporting company section and exempt entity options
    function updateVisibility() {
        const reportDiv = document.querySelector('.reportinngcompanynotinitial');
        const isInitialReportChecked = document.getElementById('InitialReport').checked;
        const isExemptEntityChecked = document.getElementById('NewlyExemptEntity').checked;
    
        // Show or hide the reporting section based on selected filing type
        if (isInitialReportChecked || isExemptEntityChecked) {
            reportDiv.style.display = 'none'; // Hide if Initial Report or Newly Exempt Entity is selected
        } else {
            reportDiv.style.display = 'block'; // Show for other selections
        }
    
        // Update visibility of .exemptentityoption elements
        const exemptOptions = document.querySelectorAll('.exemptentityoption');
        exemptOptions.forEach(option => {
            option.style.display = isExemptEntityChecked ? 'none' : 'block'; // Hide if Newly Exempt Entity is checked
    
            option.querySelectorAll('input, select, textarea').forEach(input => {
                input.removeAttribute("required");  // Always remove required attribute
                
                // Check if the input is a <select> element and disable it if the checkbox is checked
                if (input.tagName.toLowerCase() === 'select') {
                    if (isExemptEntityChecked) {
                        input.setAttribute("disabled", true); // Disable the <select> if checkbox is checked
                    } else {
                        input.removeAttribute("disabled"); // Enable the <select> if checkbox is unchecked
                    }
                }
            });
        });
    }
    
    // Add event listeners to each filing type to handle visibility and requirement
    document.querySelectorAll('input[name="Type of Filing"]').forEach(function(radio) {
        radio.addEventListener('change', updateVisibility);
    });
    
    // Event listener for the Newly Exempt Entity checkbox
    document.getElementById('NewlyExemptEntity').addEventListener('change', updateVisibility);
    
    // Run the function once on page load to set the initial state
    updateVisibility();
    
    
        // Intersection Observer to toggle 'normalbox' class on .alert elements within .ordersummarybox
        function handleVisibility(entries) {
            entries.forEach(entry => {
                const alertElement = entry.target.querySelector('.alert');
                if (alertElement) {
                    alertElement.classList.toggle('normalbox', entry.isIntersecting);
                }
            });
        }
        
        const observer = new IntersectionObserver(handleVisibility, { threshold: 0.1 });
        const summaryBox = document.querySelector('.ordersummarybox');
        if (summaryBox) {
            observer.observe(summaryBox);
        }
    
        document.getElementById('exemptentitypopupbbtn').addEventListener('click', function() {
            const exemptEntityPopup = document.querySelector('.exemptentitypopup');
            if (exemptEntityPopup) {
                exemptEntityPopup.style.display = 'none';
            }
        });
    
        // Add an event listener to the button
    document.querySelector('.residentialimagebtn').addEventListener('click', function() {
        // Reset the file input field
        document.getElementById('residentialimageidentificationform').value = '';
    });
    
    
        // Add an event listener to the button
        document.querySelector('.identificationbtnremove').addEventListener('click', function() {
        // Reset the file input field
        document.getElementById('imageidentificationform').value = '';
    });
    
    
    // Get references to the dropdown and country field
    const dropdown = document.getElementById('legalnamepriorreporttax');
        const countryField = document.querySelector('.legalnamepriorreporttaxcountry');
    
        // Function to toggle visibility based on selected option
        function toggleCountryField() {
            if (dropdown.value === 'Foriegn') {
                countryField.style.display = 'block'; // Show the country field
            } else {
                countryField.style.display = 'none'; // Hide the country field
            }
        }
    
        // Event listener for dropdown change
        dropdown.addEventListener('change', toggleCountryField);
    
        // Initial check on page load
        toggleCountryField();
    
         // Maximum number of duplicates allowed
        const maxDuplicates = 5;
        let currentCount = 1; // Start with 1 since we already have one alternate name
    
        document.getElementById('addalternatename').addEventListener('click', function() {
            if (currentCount < maxDuplicates) {
                currentCount++; // Increment the count
    
                // Create a new div for the alternate name
                const newDiv = document.createElement('div');
                newDiv.className = 'alternate-name';
                newDiv.innerHTML = `
                    <label for="alternate-name-${currentCount}">Alternate Name ${currentCount}:</label>
                    <input type="text" id="alternate-name-${currentCount}" name="Alternate Name ${currentCount}" placeholder="Enter Alternate Name ${currentCount}" class="form-control mb-4">
                    <button class="remove-alternate-name btn btn-danger">Remove Alternate</button>
                `;
    
                // Append the new div to the container
                document.getElementById('morealternatename').appendChild(newDiv);
    
                // Add event listener to the remove button
                newDiv.querySelector('.remove-alternate-name').addEventListener('click', function() {
                    // Check if there's more than one entry
                    if (currentCount > 1) {
                        newDiv.remove(); // Remove the entry
                        currentCount--; // Decrement the count
                    } else {
                        alert('At least one alternate name must remain.');
                    }
                });
            } else {
                // Alert the user if the limit is reached
                alert('No more adding options.');
            }
        });
     
     
        const maxDuplicatesapplicant = 5;
            let currentCountapplicant = 1; // Start with 1 since we already have one alternate name
    
            document.getElementById('addcompanyapplicant').addEventListener('click', function() {
                if (currentCountapplicant < maxDuplicatesapplicant) {
                    currentCountapplicant++; // Increment the count
    
                    // Create a new div for the alternate name
                    const newDivapplicant = document.createElement('div');
                    newDivapplicant.className = 'alternate-applicant';
                    newDivapplicant.innerHTML = `
                        <div class="row mt-5 pt-5">
                            <hr>
                            <div class="col-12 text-warning pt-5">Company Applicant ${currentCountapplicant}</div>
                            <div class="col-3">
                                <label for="companyapplicantfincenid${currentCountapplicant}" class="mid">18. Company applicant FinCEN ID</label>
                                <input type="text" id="companyapplicantfincenid${currentCountapplicant}" class="form-control" name="18. Company Applicant ${currentCountapplicant}" placeholder="Enter FinCEN ID">
                            </div>
                            <div class="col-12">&nbsp;</div>
                            <div class="col-3">
                                <label for="companyapplicantindividualname${currentCountapplicant}" class="mid">19. Individual's last name &nbsp; <span style="color:red">*</span></label>
                                <input type="text" id="companyapplicantindividualname${currentCountapplicant}" class="form-control" name="19. Individual's last name ${currentCountapplicant}" placeholder="Enter Individual's last name">
                            </div>
                            <div class="col-3">
                                <label for="companyapplicantfirstname${currentCountapplicant}" class="mid">20. First Name  &nbsp; <span style="color:red">*</span></label>
                                <input type="text" id="companyapplicantfirstname${currentCountapplicant}" class="form-control" name="20. First Name ${currentCountapplicant}" placeholder="Enter First Name">
                            </div>
                            <div class="col-3">
                                <label for="companyapplicantmiddlename${currentCountapplicant}" class="mid">21. Middle Name</label>
                                <input type="text" id="companyapplicantmiddlename${currentCountapplicant}" class="form-control" name="21. Middle Name ${currentCountapplicant}" placeholder="Enter Middle Name">
                            </div>
                            <div class="col-3">
                                <label for="companyapplicantsuffix${currentCountapplicant}" class="mid">22. Suffix</label>
                                <input type="text" id="companyapplicantsuffix${currentCountapplicant}" class="form-control" name="22. Suffix ${currentCountapplicant}" placeholder="Enter Suffix">
                            </div>
                            <div class="col-3">
                                <label for="applicantbirthMo${currentCountapplicant}" class="mid">23. Date of birth &nbsp; <span style="color:red">*</span></label>
                                <div class="d-flex">
                                    <input type="text" id="applicantbirthMo${currentCountapplicant}" pattern="[0-9]{1,2}" placeholder="MM" class="form-control" maxlength="2" size="2" name="MM ${currentCountapplicant}">
                                    <input type="text" id="applicantbirthDay${currentCountapplicant}" pattern="[0-9]{1,2}" placeholder="DD" class="form-control" name="DD ${currentCountapplicant}" maxlength="2" size="2">
                                    <input type="text" id="applicantbirthYEAR${currentCountapplicant}" pattern="[0-9]{4}" placeholder="YYYY" class="form-control" name="Year ${currentCountapplicant}" maxlength="4" size="4">
                                </div>    
                            </div>
                            <div class="col-12 mt-4">
                            <button class="remove-applicant btn btn-danger" type="button" >Remove Applicant ${currentCountapplicant}</button>
                            </div>
                        </div>
                    `;
    
    
                // Append the new div to the container
                document.getElementById('companyapplicant').appendChild(newDivapplicant);
    
                // Add event listener to the remove button
                newDivapplicant.querySelector('.remove-applicant').addEventListener('click', function() {
                    // Check if there's more than one entry
                    if (currentCountapplicant > 1) {
                        newDivapplicant.remove(); // Remove the entry
                        currentCountapplicant--; // Decrement the count
                    } else {
                        alert('At least one alternate name must remain.');
                    }
                });
            } else {
                // Alert the user if the limit is reached
                alert('No more adding options.');
            }
        });
    
        const maxDuplicatesboi = 5;
            let currentCountboi = 1; // Start with 1 since we already have one alternate name
    
            document.getElementById('addboiowner2').addEventListener('click', function() {
                if (currentCountboi < maxDuplicatesboi) {
                    currentCountboi++; // Increment the count
    
                    // Create a new div for the alternate name
                    const newDivBoi = document.createElement('div');
                    newDivBoi.className = 'alternate-boi';
                    newDivBoi.innerHTML = `
                     <div class="row mt-5 pt-5">
                <div class="col-12"><hr></div>
                <div class="col-12 my-5"><h3>Beneficial Owner ${currentCountboi}</h3></div>
                <div class="col-lg-12">
                    <label class="form-check-label">
                        <input type="checkbox" id="parentguardian${currentCountboi}" name="35. Parent/Guardian information instead of minor child ${currentCountboi}" class="radio"> 35. Parent/Guardian information instead of minor child
                    </label>
                </div>
                <div class="col-lg-5 my-5">
                    <label for="beneficialownerfincenid${currentCountboi}" class="mid">36. FinCEN ID</label>
                    <input type="text" id="beneficialownerfincenid${currentCountboi}" class="form-control" name="36. FinCEN ID ${currentCountboi}" placeholder="Enter FinCEN ID">
                </div>
                <div class="col-lg-12">
                    <label class="form-check-label">
                        <input type="checkbox" id="exemptentity${currentCountboi}" name="37. Exempt Entity ${currentCountboi}" class="radio"> 37. Exempt Entity
                    </label>
                </div>
                <div class="col-lg-12 mt-5">
                    <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 col-12 mt-5">Legal name and date of birth</h5>
                </div>
                <div class="col-3">
                    <label for="legalnameindividualname${currentCountboi}" class="mid">38. Individual's last name or entity's legal name &nbsp; <span style="color:red">*</span></label>
                    <input type="text" id="legalnameindividualname${currentCountboi}" class="form-control" name="38. Individual's last name or entity's legal name ${currentCountboi}" placeholder="Enter Individual's last name or entity's legal name">
                </div>
                <div class="col-3">
                    <label for="legalnameindividualfirstname${currentCountboi}" class="mid">39. First Name &nbsp; <span style="color:red">*</span></label>
                    <input type="text" id="legalnameindividualfirstname${currentCountboi}" class="form-control" name="39. First Name ${currentCountboi}" placeholder="Enter First Name">
                </div>
                <div class="col-3">
                    <label for="legalnameindividualmiddlename${currentCountboi}" class="mid">40. Middle Name</label>
                    <input type="text" id="legalnameindividualmiddlename${currentCountboi}" class="form-control" name="40. Middle Name ${currentCountboi}" placeholder="Enter Middle Name">
                </div>
                <div class="col-3">
                    <label for="legalnameindividualsuffix${currentCountboi}" class="mid">41. Suffix</label>
                    <input type="text" id="legalnameindividualsuffix${currentCountboi}" class="form-control" name="41. Suffix${currentCountboi}" placeholder="Enter Suffix">
                </div>
                <div class="col-3">
                    <label for="legalnameindividualMo${currentCountboi}" class="mid">42. Date of Birth &nbsp; <span style="color:red">*</span></label>
                    <div class="d-flex">
                        <input type="text" id="legalnameindividualMo${currentCountboi}" pattern="[0-9]{1,2}" placeholder="MM" class="form-control" maxlength="2" name="42. Birth MM ${currentCountboi}">
                        <input type="text" id="legalnameindividualDay${currentCountboi}" pattern="[0-9]{1,2}" placeholder="DD" class="form-control" maxlength="2" name="42. Birth DD ${currentCountboi}">
                        <input type="text" id="legalnameindividualYEAR${currentCountboi}" pattern="[0-9]{4}" placeholder="YYYY" class="form-control" maxlength="4" name="42. Birth Year ${currentCountboi}">
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <h4 class="h6 font-weight-semi-bold text-uppercase mb-0 col-lg-12">Residential Address</h4>
                </div>
                <div class="col-lg-4">
                    <label for="legalresidentialaddress${currentCountboi}" class="mid">43. Address (number, street, and apt. or suite no.) &nbsp; <span style="color:red">*</span></label>
                    <input type="text" id="legalresidentialaddress${currentCountboi}" class="form-control" name="43. Address${currentCountboi}" placeholder="Enter Address">
                </div>
                <div class="col-lg-3">
                    <label for="legalresidentialaddresscity${currentCountboi}" class="mid">44. City &nbsp; <span style="color:red">*</span></label>
                    <input type="text" id="legalresidentialaddresscity${currentCountboi}" class="form-control" name="44. City ${currentCountboi}" placeholder="Enter City">
                </div>
                <div class="col-lg-3">
                    <label for="legalresidentialaddressjuridiction${currentCountboi}" class="mid">45. Country/Jurisdiction &nbsp; <span style="color:red">*</span></label>
                    <select class="form-control" id="legalresidentialaddressjuridiction${currentCountboi}" name="45. Country/Jurisdiction ${currentCountboi}">
                    <option disabled>Select Country/Jurisdiction</option>
                        <option value="US">United States of America</option><option value="AS">American Samoa</option><option value="GU">Guam</option><option value="MH">Marshall Islands</option><option value="FM">Micronesia, Federated States</option><option value="MP">Northern Mariana Islands</option><option value="PW">Palau</option><option value="PR">Puerto Rico</option><option value="VI">U.S. Virgin Islands</option><option value="AF">Afghanistan</option><option value="AX">Åland Islands</option><option value="AL">Albania</option><option value="DZ">Algeria</option><option value="AD">Andorra</option><option value="AO">Angola</option><option value="AI">Anguilla</option><option value="AQ">Antarctica</option><option value="AG">Antigua And Barbuda</option><option value="AR">Argentina</option><option value="AM">Armenia</option><option value="AW">Aruba</option><option value="AU">Australia</option><option value="AT">Austria</option><option value="AZ">Azerbaijan</option><option value="BS">Bahamas</option><option value="BH">Bahrain</option><option value="BD">Bangladesh</option><option value="BB">Barbados</option><option value="BY">Belarus</option><option value="BE">Belgium</option><option value="BZ">Belize</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BT">Bhutan</option><option value="BO">Bolivia, Plurinational State Of</option><option value="BQ">Bonaire, Sint Eustatius And Saba</option><option value="BA">Bosnia And Herzegovina</option><option value="BW">Botswana</option><option value="BV">Bouvet Island</option><option value="BR">Brazil</option><option value="IO">British Indian Ocean Territory</option><option value="BN">Brunei Darussalam</option><option value="BG">Bulgaria</option><option value="BF">Burkina Faso</option><option value="BI">Burundi</option><option value="KH">Cambodia</option><option value="CM">Cameroon</option><option value="CA">Canada</option><option value="CV">Cape Verde</option><option value="KY">Cayman Islands</option><option value="CF">Central African Republic</option><option value="TD">Chad</option><option value="CL">Chile</option><option value="CN">China</option><option value="CX">Christmas Island</option><option value="CC">Cocos (Keeling) Islands</option><option value="CO">Colombia</option><option value="KM">Comoros</option><option value="CG">Congo</option><option value="CD">Congo, The Democratic Republic Of The</option><option value="CK">Cook Islands</option><option value="CR">Costa Rica</option><option value="CI">Côte D'ivoire</option><option value="HR">Croatia</option><option value="CU">Cuba</option><option value="CW">Curaçao</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DK">Denmark</option><option value="DJ">Djibouti</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="EC">Ecuador</option><option value="EG">Egypt</option><option value="SV">El Salvador</option><option value="GQ">Equatorial Guinea</option><option value="ER">Eritrea</option><option value="EE">Estonia</option><option value="ET">Ethiopia</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FO">Faroe Islands</option><option value="FJ">Fiji</option><option value="FI">Finland</option><option value="FR">France</option><option value="GF">French Guiana</option><option value="PF">French Polynesia</option><option value="TF">French Southern Territories</option><option value="GA">Gabon</option><option value="GM">Gambia</option><option value="GE">Georgia</option><option value="DE">Germany</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GR">Greece</option><option value="GL">Greenland</option><option value="GD">Grenada</option><option value="GP">Guadeloupe</option><option value="GT">Guatemala</option><option value="GG">Guernsey</option><option value="GN">Guinea</option><option value="GW">Guinea-bissau</option><option value="GY">Guyana</option><option value="HT">Haiti</option><option value="HM">Heard Island And Mcdonald Islands</option><option value="VA">Holy See (Vatican City State)</option><option value="HN">Honduras</option><option value="HK">Hong Kong</option><option value="HU">Hungary</option><option value="IS">Iceland</option><option value="IN">India</option><option value="ID">Indonesia</option><option value="IR">Iran, Islamic Republic Of</option><option value="IQ">Iraq</option><option value="IE">Ireland</option><option value="IM">Isle Of Man</option><option value="IL">Israel</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JP">Japan</option><option value="JE">Jersey</option><option value="JO">Jordan</option><option value="KZ">Kazakhstan</option><option value="KE">Kenya</option><option value="KI">Kiribati</option><option value="KP">Korea, Democratic People's Republic Of</option><option value="KR">Korea, Republic Of</option><option value="KW">Kuwait</option><option value="KG">Kyrgyzstan</option><option value="LA">Lao People's Democratic Republic</option><option value="LV">Latvia</option><option value="LB">Lebanon</option><option value="LS">Lesotho</option><option value="LR">Liberia</option><option value="LY">Libya</option><option value="LI">Liechtenstein</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="MO">Macao</option><option value="MK">Macedonia, The Former Yugoslav Republic Of</option><option value="MG">Madagascar</option><option value="MW">Malawi</option><option value="MY">Malaysia</option><option value="MV">Maldives</option><option value="ML">Mali</option><option value="MT">Malta</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MU">Mauritius</option><option value="YT">Mayotte</option><option value="MX">Mexico</option><option value="MD">Moldova, Republic Of</option><option value="MC">Monaco</option><option value="MN">Mongolia</option><option value="ME">Montenegro</option><option value="MS">Montserrat</option><option value="MA">Morocco</option><option value="MZ">Mozambique</option><option value="MM">Myanmar</option><option value="NA">Namibia</option><option value="NR">Nauru</option><option value="NP">Nepal</option><option value="NL">Netherlands</option><option value="NC">New Caledonia</option><option value="NZ">New Zealand</option><option value="NI">Nicaragua</option><option value="NE">Niger</option><option value="NG">Nigeria</option><option value="NU">Niue</option><option value="NF">Norfolk Island</option><option value="NO">Norway</option><option value="OM">Oman</option><option value="PK">Pakistan</option><option value="PS">Palestinian Territory, Occupied</option><option value="PA">Panama</option><option value="PG">Papua New Guinea</option><option value="PY">Paraguay</option><option value="PE">Peru</option><option value="PH">Philippines</option><option value="PN">Pitcairn</option><option value="PL">Poland</option><option value="PT">Portugal</option><option value="QA">Qatar</option><option value="RE">Réunion</option><option value="RO">Romania</option><option value="RU">Russian Federation</option><option value="RW">Rwanda</option><option value="BL">Saint Barthélemy</option><option value="SH">Saint Helena, Ascension And Tristan Da Cunha</option><option value="KN">Saint Kitts And Nevis</option><option value="LC">Saint Lucia</option><option value="MF">Saint Martin (french Part)</option><option value="PM">Saint Pierre And Miquelon</option><option value="VC">Saint Vincent And The Grenadines</option><option value="WS">Samoa</option><option value="SM">San Marino</option><option value="ST">Sao Tome And Principe</option><option value="SA">Saudi Arabia</option><option value="SN">Senegal</option><option value="RS">Serbia</option><option value="SC">Seychelles</option><option value="SL">Sierra Leone</option><option value="SG">Singapore</option><option value="SX">Sint Maarten (dutch Part)</option><option value="SK">Slovakia</option><option value="SI">Slovenia</option><option value="SB">Solomon Islands</option><option value="SO">Somalia</option><option value="ZA">South Africa</option><option value="GS">South Georgia And The South Sandwich Islands</option><option value="SS">South Sudan</option><option value="ES">Spain</option><option value="LK">Sri Lanka</option><option value="SD">Sudan</option><option value="SR">Suriname</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SZ">Swaziland</option><option value="SE">Sweden</option><option value="CH">Switzerland</option><option value="SY">Syrian Arab Republic</option><option value="TW">Taiwan</option><option value="TJ">Tajikistan</option><option value="TZ">Tanzania, United Republic Of</option><option value="TH">Thailand</option><option value="TL">Timor-leste</option><option value="TG">Togo</option><option value="TK">Tokelau</option><option value="TO">Tonga</option><option value="TT">Trinidad And Tobago</option><option value="TN">Tunisia</option><option value="TR">Turkey</option><option value="TM">Turkmenistan</option><option value="TC">Turks And Caicos Islands</option><option value="TV">Tuvalu</option><option value="UG">Uganda</option><option value="UA">Ukraine</option><option value="AE">United Arab Emirates</option><option value="GB">United Kingdom</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VU">Vanuatu</option><option value="VE">Venezuela, Bolivarian Republic Of</option><option value="VN">Viet Nam</option><option value="VG">Virgin Islands, British</option><option value="WF">Wallis And Futuna</option><option value="EH">Western Sahara</option><option value="YE">Yemen</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option></select>
                </div>
                <div class="col-lg-2">
                    <label for="legalresidentialaddressstate${currentCountboi}" class="mid">46. State &nbsp; <span style="color:red">*</span></label>
                    <select id="legalresidentialaddressstate${currentCountboi}" class="form-control" name="46. State ${currentCountboi}">
                        <option disabled>Select a state</option>
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
                    <label for="legalresidentialaddresszip${currentCountboi}" class="mid">47. Zip Code/Foreign postal code &nbsp; <span style="color:red">*</span></label>
                    <input type="text" id="legalresidentialaddresszip${currentCountboi}" class="form-control" name="47. Zip Code/Foreign postal code ${currentCountboi}" placeholder="Enter Zip Code">
                </div>
                <div class="col-lg-12 mt-5">
                    <h5 class="h6 font-weight-semi-bold text-uppercase mb-0 col-lg-12">Form of Identification and Issuing Jurisdiction</h5>
                </div>
                <div class="col-lg-4">
                    <label for="residentialformidentificationtype${currentCountboi}" class="mid">48. Identification document type &nbsp; <span style="color:red">*</span></label>
                    <select id="residentialformidentificationtype${currentCountboi}" name="48. Identification document type ${currentCountboi}" class="form-control">
                        <option disabled>Select Identification document type</option>
                        <option value="37">State issued driver's license</option>
                        <option value="38">State/local/tribe-issued ID</option>
                        <option value="39">U.S. passport</option>
                        <option value="40">Foreign passport</option>
                    </select>
                </div>
                <div class="col-lg-3">
                    <label for="residentialformidentificationnumber${currentCountboi}" class="mid">49. Identification document number &nbsp; <span style="color:red">*</span></label>
                    <input type="text" id="residentialformidentificationnumber${currentCountboi}" class="form-control" name="49. Identification document number ${currentCountboi}" placeholder="Enter ID Number">
                </div>
                <div class="col-lg-5">
                    <label for="residentialstateofidentificationform${currentCountboi}" class="mid">50. Issuing jurisdiction &nbsp; <span style="color:red">*</span></label>
                    <select id="residentialstateofidentificationform${currentCountboi}" class="form-control" name="50. Issuing jurisdiction${currentCountboi}">
                        <option disabled>Select a state</option>
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
                                                                  <option value="WY">Wyoming</option></select></div><div class="col-lg-3"><label for="residentialtribalidentificationform${currentCountboi}" class="mid">c. Local/Tribal</label><select  class="form-control"  id="residentialtribalidentificationform${currentCountboi}" name="residentialtribalidentificationform${currentCountboi}"  aria-hidden="true" tabindex="-1"><option disabled>Select Local/Tribal</option><option value="Absentee-Shawnee">Absentee-Shawnee Tribe of Indians of Oklahoma</option><option value="Agdaagux">Agdaagux Tribe of King Cove</option><option value="Agua Caliente">Agua Caliente Band of Cahuilla Indians of the Agua Caliente Indian Reservation, California</option><option value="Ak Chin">Ak-Chin Indian Community</option><option value="Akiachak">Akiachak Native Community</option><option value="Akiak">Akiak Native Community</option><option value="Alabama-Coushatta">Alabama-Coushatta Tribe of Texas</option><option value="Alabama-Quassarte Tribal Town">Alabama-Quassarte Tribal Town</option><option value="Alatna">Alatna Village</option><option value="Algaaciq">Algaaciq Native Village (St. Mary's)</option><option value="Allakaket">Allakaket Village</option><option value="Alturas">Alturas Indian Rancheria, California</option><option value="Alutiiq Tribe of Old Harbor">Alutiiq Tribe of Old Harbor</option><option value="Angoon">Angoon Community Association</option><option value="Anvik">Anvik Village</option><option value="Apache">Apache Tribe of Oklahoma</option><option value="Arctic Village">Arctic Village (See Native Village of Venetie Tribal Government)</option><option value="Asa'carsarmiut">Asa'carsarmiut Tribe</option><option value="Assiniboine and Sioux">Assiniboine &amp; Sioux Tribes of the Fort Peck Indian Reservation, Montana</option><option value="Augustine">Augustine Band of Cahuilla Indians, California</option><option value="Bad River Band">Bad River Band of the Lake Superior Tribe of Chippewa Indians of the Bad River Reservation, Wisconsin</option><option value="Bay Mills">Bay Mills Indian Community, Michigan</option><option value="Bear River">Bear River Band of the Rohnerville Rancheria, California</option><option value="Beaver">Beaver Village</option><option value="Berry Creek">Berry Creek Rancheria of Maidu Indians of California</option><option value="Big Lagoon">Big Lagoon Rancheria, California</option><option value="Big Pine Reservation">Big Pine Paiute Tribe of the Owens Valley</option><option value="Big Sandy">Big Sandy Rancheria of Western Mono Indians of California</option><option value="Big Valley Rancheria">Big Valley Band of Pomo Indians of the Big Valley Rancheria, California</option><option value="Birch Creek">Birch Creek Tribe</option><option value="Bishop Paiute">Bishop Paiute Tribe</option><option value="Blackfeet">Blackfeet Tribe of the Blackfeet Indian Reservation of Montana</option><option value="Blue Lake">Blue Lake Rancheria, California</option><option value="Bridgeport Indian Colony">Bridgeport Indian Colony</option><option value="Buena Vista Rancheria">Buena Vista Rancheria of Me-Wuk Indians of California</option><option value="Burns Paiute">Burns Paiute Tribe</option><option value="Cabazon">Cabazon Band of Mission Indians, California</option><option value="Cachil DeHe">Cachil DeHe Band of Wintun Indians of the Colusa Indian Community of the Colusa Rancheria, California</option><option value="Caddo">Caddo Nation of Oklahoma</option><option value="Cahto">Cahto Tribe of the Laytonville Rancheria</option><option value="Cahuilla">Cahuilla Band of Indians</option><option value="California Valley">California Valley Miwok Tribe, California</option><option value="Campo">Campo Band of Diegueno Mission Indians of the Campo Indian Reservation, California</option><option value="Capitan Grande">Capitan Grande Band of Diegueno Mission Indians of California (Barona Group of Capitan Grande Band of Mission Indians of the Barona Reservation, California)</option><option value="Capitan Grande Band">Capitan Grande Band of Diegueno Mission Indians of California</option><option value="Viejas">Capitan Grande Band of Diegueno Mission Indians of California: Viejas (Baron Long) Group of Capitan Grande Band of Mission Indians of the Viejas Reservation, California</option><option value="Catawba">Catawba Indian Nation (aka Catawba Indian Tribe of South Carolina)</option><option value="Cayuga Nation of New York">Cayuga Nation</option><option value="Cedarville">Cedarville Rancheria, California</option><option value="Tlingit &amp; Haida">Central Council of the Tlingit &amp; Haida Indian Tribes</option><option value="Chalkyitsik">Chalkyitsik Village</option><option value="Cheesh-Na">Cheesh-Na Tribe</option><option value="Chemehuevi">Chemehuevi Indian Tribe of the Chemehuevi Reservation, California</option><option value="Cher-Ae Heights">Cher-Ae Heights Indian Community of the Trinidad Rancheria, California</option><option value="Cherokee Nation">Cherokee Nation</option><option value="Chevak">Chevak Native Village</option><option value="Cheyenne River">Cheyenne and Arapaho Tribes, Oklahoma</option><option value="Cheyenne River Sioux Tribe">Cheyenne River Sioux Tribe of the Cheyenne River Reservation, South Dakota</option><option value="Chickahominy Indians-Eastern Division">Chickahominy Indian Tribe - Eastern Division</option><option value="Chickahominy Indian Tribe, Inc.">Chickahominy Indian Tribe</option><option value="Chickaloon">Chickaloon Native Village</option><option value="Chicken Ranch">Chicken Ranch Rancheria of Me-Wuk Indians of California</option><option value="Chignik Bay">Chignik Bay Tribal Council</option><option value="Chignik Lake">Chignik Lake Village</option><option value="Chilkat">Chilkat Indian Village (Klukwan)</option><option value="Chilkoot">Chilkoot Indian Association (Haines)</option><option value="Chinik">Chinik Eskimo Community (Golovin)</option><option value="Chippewa-Cree">Chippewa Cree Indians of the Rocky Boy's Reservation, Montana</option><option value="Chitimacha">Chitimacha Tribe of Louisiana</option><option value="Chuloonawick">Chuloonawick Native Village</option><option value="Circle">Circle Native Community</option><option value="Citizen Potawatomi">Citizen Potawatomi Nation, Oklahoma</option><option value="Cloverdale">Cloverdale Rancheria of Pomo Indians of California</option><option value="Cocopah">Cocopah Tribe of Arizona</option><option value="Coeur D'Alene">Coeur D'Alene Tribe</option><option value="Cold Springs">Cold Springs Rancheria of Mono Indians of California</option><option value="Colorado River">Colorado River Indian Tribes of the Colorado River Indian Reservation, Arizona and California</option><option value="Comanche">Comanche Nation, Oklahoma</option><option value="Confederated Salish">Confederated Salish and Kootenai Tribes of the Flathead Reservation</option><option value="Confederated Yakama">Confederated Tribes and Bands of the Yakama Nation</option><option value="Siletz Tribe">Confederated Tribes of Siletz Indians of Oregon</option><option value="Chehalis">Confederated Tribes of the Chehalis Reservation</option><option value="Confederated Colville">Confederated Tribes of the Colville Reservation</option><option value="Confederated Coos">Confederated Tribes of the Coos, Lower Umpqua and Siuslaw Indians</option><option value="Confederated Goshute">Confederated Tribes of the Goshute Reservation, Nevada and Utah</option><option value="Grand Ronde Tribes">Confederated Tribes of the Grand Ronde Community of Oregon</option><option value="Umatilla Tribe">Confederated Tribes of the Umatilla Indian Reservation</option><option value="Warms Springs Tribe">Confederated Tribes of the Warm Springs Reservation of Oregon</option><option value="Coquille">Coquille Indian Tribe</option><option value="Coushatta">Coushatta Tribe of Louisiana</option><option value="Cow Creek">Cow Creek Band of Umpqua Tribe of Indians</option><option value="Cowlitz">Cowlitz Indian Tribe</option><option value="Coyote Valley">Coyote Valley Band of Pomo Indians of California</option><option value="Craig">Craig Tribal Association</option><option value="Crow Creek">Crow Creek Sioux Tribe of the Crow Creek Reservation, South Dakota</option><option value="Crow">Crow Tribe of Montana</option><option value="Curyung">Curyung Tribal Council</option><option value="Delaware Nation">Delaware Nation, Oklahoma</option><option value="Delaware Tribe of Indians">Delaware Tribe of Indians</option><option value="Douglas">Douglas Indian Association</option><option value="Dry Creek">Dry Creek Rancheria Band of Pomo Indians, California</option><option value="Duckwater">Duckwater Shoshone Tribe of the Duckwater Reservation, Nevada</option><option value="Eastern Cherokee">Eastern Band of Cherokee Indians</option><option value="Eastern Shawnee Tribe of Oklahoma">Eastern Shawnee Tribe of Oklahoma</option><option value="Eastern Shoshone">Eastern Shoshone Tribe of the Wind River Reservation, Wyoming</option><option value="Egegik">Egegik Village</option><option value="Eklutna">Eklutna Native Village</option><option value="Elem">Elem Indian Colony of Pomo Indians of the Sulphur Bank Rancheria, California</option><option value="Elk Valley">Elk Valley Rancheria, California</option><option value="Ely Shoshone">Ely Shoshone Tribe of Nevada</option><option value="Emmonak">Emmonak Village</option><option value="Enterprise">Enterprise Rancheria of Maidu Indians of California</option><option value="Evansville">Evansville Village (aka Bettles Field)</option><option value="Ewiiaapaayp">Ewiiaapaayp Band of Kumeyaay Indians, California</option><option value="Federated Indians of Graton">Federated Indians of Graton Rancheria, California</option><option value="Flandreau">Flandreau Santee Sioux Tribe of South Dakota</option><option value="Forest County">Forest County Potawatomi Community, Wisconsin</option><option value="Assiniboine and Gros Ventre Tribes">Fort Belknap Indian Community of the Fort Belknap Reservation of Montana</option><option value="Fort Bidwell">Fort Bidwell Indian Community of the Fort Bidwell Reservation of California</option><option value="Fort Independence">Fort Independence Indian Community of Paiute Indians of the Fort Independence Reservation, California</option><option value="Fort McDermitt">Fort McDermitt Paiute and Shoshone Tribes of the Fort McDermitt Indian Reservation, Nevada and Oregon</option><option value="Fort McDowell">Fort McDowell Yavapai Nation, Arizona</option><option value="Fort Mojave">Fort Mojave Indian Tribe of Arizona, California &amp; Nevada</option><option value="Fort Sill">Fort Sill Apache Tribe of Oklahoma</option><option value="Galena">Galena Village (aka Louden Village)</option><option value="Gila River">Gila River Indian Community of the Gila River Indian Reservation, Arizona</option><option value="Grand Traverse">Grand Traverse Band of Ottawa and Chippewa Indians, Michigan</option><option value="Greenville">Greenville Rancheria</option><option value="Grindstone">Grindstone Indian Rancheria of Wintun-Wailaki Indians of California</option><option value="Guidiville">Guidiville Rancheria of California</option><option value="Gulkana">Gulkana Village Council</option><option value="Habematolel">Habematolel Pomo of Upper Lake, California</option><option value="Hannahville">Hannahville Indian Community, Michigan</option><option value="Havasupai">Havasupai Tribe of the Havasupai Reservation, Arizona</option><option value="Healy Lake">Healy Lake Village</option><option value="Ho-Chunk">Ho-Chunk Nation of Wisconsin</option><option value="Hoh">Hoh Indian Tribe</option><option value="Holy Cross">Holy Cross Tribe</option><option value="Hoonah">Hoonah Indian Association</option><option value="Hoopa">Hoopa Valley Tribe, California</option><option value="Hopi">Hopi Tribe of Arizona</option><option value="Hopland">Hopland Band of Pomo Indians, California</option><option value="Houlton">Houlton Band of Maliseet Indians</option><option value="Hualapai">Hualapai Indian Tribe of the Hualapai Indian Reservation, Arizona</option><option value="Hughes">Hughes Village</option><option value="Huslia">Huslia Village</option><option value="Hydaburg">Hydaburg Cooperative Association</option><option value="Igiugig">Igiugig Village</option><option value="Iipay">Iipay Nation of Santa Ysabel, California</option><option value="Inaja">Inaja Band of Diegueno Mission Indians of the Inaja and Cosmit Reservation, California</option><option value="Inupiat Community of the Arctic Slope">Inupiat Community of the Arctic Slope</option><option value="Ione">Ione Band of Miwok Indians of California</option><option value="Iowa of Kansas">Iowa Tribe of Kansas and Nebraska</option><option value="Iowa of Oklahoma">Iowa Tribe of Oklahoma</option><option value="Iqugmiut">Iqugmiut Traditional Council</option><option value="Ivanof Bay Tribe">Ivanof Bay Tribe</option><option value="Jackson">Jackson Band of Miwuk Indians</option><option value="Jamestown">Jamestown S'Klallam Tribe</option><option value="Jamul">Jamul Indian Village of California</option><option value="Jena">Jena Band of Choctaw Indians</option><option value="Jicarilla">Jicarilla Apache Nation, New Mexico</option><option value="Kaguyuk">Kaguyak Village</option><option value="Kaibab">Kaibab Band of Paiute Indians of the Kaibab Indian Reservation, Arizona</option><option value="Kaktovik">Kaktovik Village (aka Barter Island)</option><option value="Kalispel">Kalispel Indian Community of the Kalispel Reservation</option><option value="Karuk">Karuk Tribe</option><option value="Kashia">Kashia Band of Pomo Indians of the Stewarts Point Rancheria, California</option><option value="Kasigluk">Kasigluk Traditional Elders Council</option><option value="Kaw">Kaw Nation, Oklahoma</option><option value="Kenaitze">Kenaitze Indian Tribe</option><option value="Ketchikan">Ketchikan Indian Community</option><option value="Keweenaw">Keweenaw Bay Indian Community, Michigan</option><option value="Kialegee Tribal Town">Kialegee Tribal Town</option><option value="Kickapoo of Texas">Kickapoo Traditional Tribe of Texas</option><option value="Kickapoo Tribe in Kansas">Kickapoo Tribe of Indians of the Kickapoo Reservation in Kansas</option><option value="Kickapoo of Oklahoma">Kickapoo Tribe of Oklahoma</option><option value="King Island">King Island Native Community</option><option value="King Salmon">King Salmon Tribe</option><option value="Kiowa Tribe">Kiowa  Indian Tribe of Oklahoma</option><option value="Klamath">Klamath Tribes</option><option value="Klawock">Klawock Cooperative Association</option><option value="Cortina">Kletsel Dehe Band of Wintun Indians</option><option value="Knik">Knik Tribe</option><option value="Koi">Koi Nation of Northern California</option><option value="Kokhanok">Kokhanok Village</option><option value="Kootenai">Kootenai Tribe of Idaho</option><option value="Koyukuk">Koyukuk Native Village</option><option value="La Jolla">La Jolla Band of Luiseno Indians, California</option><option value="La Posta">La Posta Band of Diegueno Mission Indians of the La Posta Indian Reservation, California</option><option value="Lac Courte Oreilles">Lac Courte Oreilles Band of Lake Superior Chippewa Indians of Wisconsin</option><option value="Lac du Flambeau">Lac du Flambeau Band of Lake Superior Chippewa Indians of the Lac du Flambeau Reservation of Wisconsin</option><option value="Lac Vieux">Lac Vieux Desert Band of Lake Superior Chippewa Indians of Michigan</option><option value="Las Vegas">Las Vegas Tribe of Paiute Indians of the Las Vegas Indian Colony, Nevada</option><option value="Levelock">Levelock Village</option><option value="Lime">Lime Village</option><option value="Little River">Little River Band of Ottawa Indians, Michigan</option><option value="Little Shell Tribe">Little Shell Tribe of Chippewa Indians of Montana</option><option value="Little Traverse">Little Traverse Bay Bands of Odawa Indians, Michigan</option><option value="Lone Pine">Lone Pine Paiute-Shoshone Tribe</option><option value="Los Coyotes">Los Coyotes Band of Cahuilla and Cupeno Indians, California</option><option value="Lovelock">Lovelock Paiute Tribe of the Lovelock Indian Colony, Nevada</option><option value="Lower Brule">Lower Brule Sioux Tribe of the Lower Brule Reservation, South Dakota</option><option value="Lower Elwha">Lower Elwha Tribal Community</option><option value="Lower Sioux">Lower Sioux Indian Community in the State of Minnesota</option><option value="Lummi">Lummi Tribe of the Lummi Reservation</option><option value="Lytton">Lytton Rancheria of California</option><option value="Makah">Makah Indian Tribe of the Makah Indian Reservation</option><option value="Manchester">Manchester Band of Pomo Indians of the Manchester Rancheria, California</option><option value="Manley Hot Springs">Manley Hot Springs Village</option><option value="Manokotak">Manokotak Village</option><option value="Manzanita">Manzanita Band of Diegueno Mission Indians of the Manzanita Reservation, California</option><option value="Mashantucket Pequot">Mashantucket Pequot Indian Tribe</option><option value="Mashpee">Mashpee Wampanoag Tribe</option><option value="Match-e-be-nash-she-wish Band">Match-e-be-nash-she-wish Band of Pottawatomi Indians of Michigan</option><option value="Mcgrath">McGrath Native Village</option><option value="Mechoopda">Mechoopda Indian Tribe of Chico Rancheria, California</option><option value="Menominee">Menominee Indian Tribe of Wisconsin</option><option value="Mentasta">Mentasta Traditional Council</option><option value="Mesa Grande">Mesa Grande Band of Diegueno Mission Indians of the Mesa Grande Reservation, California</option><option value="Mescalero Apache">Mescalero Apache Tribe of the Mescalero Reservation, New Mexico</option><option value="Metlakatla">Metlakatla Indian Community, Annette Island Reserve</option><option value="Miami Tribe of Oklahoma">Miami Tribe of Oklahoma</option><option value="Miccosukee">Miccosukee Tribe of Indians</option><option value="Middletown">Middletown Rancheria of Pomo Indians of California</option><option value="Mi'kmaq Nation">Mi'kmaq Nation</option><option value="Bois Forte">Minnesota Chippewa Tribe - Bois Forte Band (Nett Lake)</option><option value="Fond du Lac">Minnesota Chippewa Tribe - Fond du Lac Band</option><option value="Grand Portage">Minnesota Chippewa Tribe - Grand Portage Band</option><option value="Leech Lake">Minnesota Chippewa Tribe - Leech Lake Band</option><option value="Mille Lacs">Minnesota Chippewa Tribe - Mille Lacs Band</option><option value="White Earth">Minnesota Chippewa Tribe - White Earth Band</option><option value="Minnesota Chippewa">Minnesota Chippewa Tribe, Minnesota</option><option value="Mississippi Choctaw">Mississippi Band of Choctaw Indians</option><option value="Moapa">Moapa Band of Paiute Indians of the Moapa River Indian Reservation, Nevada</option><option value="Modoc Nation">Modoc Nation</option><option value="Mohegan">Mohegan Tribe of Indians of Connecticut</option><option value="Monacan Indian Nation">Monacan Indian Nation</option><option value="Mooretown">Mooretown Rancheria of Maidu Indians of California</option><option value="Morongo">Morongo Band of Mission Indians, California</option><option value="Muckleshoot">Muckleshoot Indian Tribe</option><option value="Naknek">Naknek Native Village</option><option value="Nansemond Indian Tribe">Nansemond Indian Nation</option><option value="Narragansett">Narragansett Indian Tribe</option><option value="Afognak">Native Village of Afognak</option><option value="Akhiok">Native Village of Akhiok</option><option value="Akutan">Native Village of Akutan</option><option value="Aleknagik">Native Village of Aleknagik</option><option value="Ambler">Native Village of Ambler</option><option value="Atka">Native Village of Atka</option><option value="Native Village of Atqasuk">Native Village of Atqasuk</option><option value="Barrow">Native Village of Barrow Inupiat Traditional Government</option><option value="Belkofski">Native Village of Belkofski</option><option value="Brevig Mission">Native Village of Brevig Mission</option><option value="Buckland">Native Village of Buckland</option><option value="Cantwell">Native Village of Cantwell</option><option value="Chenega">Native Village of Chenega (aka Chanega)</option><option value="Chignik Lagoon">Native Village of Chignik Lagoon</option><option value="Chitina">Native Village of Chitina</option><option value="Chuathbaluk">Native Village of Chuathbaluk (Russian Mission, Kuskokwim)</option><option value="Council">Native Village of Council</option><option value="Deering">Native Village of Deering</option><option value="Diomede">Native Village of Diomede (aka Inalik)</option><option value="Eagle">Native Village of Eagle</option><option value="Eek">Native Village of Eek</option><option value="Ekuk">Native Village of Ekuk</option><option value="Ekwok">Native Village of Ekwok</option><option value="Elim IRA">Native Village of Elim</option><option value="Eyak">Native Village of Eyak (Cordova)</option><option value="False Pass">Native Village of False Pass</option><option value="Fort Yukon">Native Village of Fort Yukon</option><option value="Gakona">Native Village of Gakona</option><option value="Gambell">Native Village of Gambell</option><option value="Georgetown">Native Village of Georgetown</option><option value="Goodnews Bay">Native Village of Goodnews Bay</option><option value="Hamilton">Native Village of Hamilton</option><option value="Hooper Bay">Native Village of Hooper Bay</option><option value="Kanatak">Native Village of Kanatak</option><option value="Karluk">Native Village of Karluk</option><option value="Kiana">Native Village of Kiana</option><option value="Kipnuk">Native Village of Kipnuk</option><option value="Kivalina">Native Village of Kivalina</option><option value="Kluti Kaah">Native Village of Kluti Kaah (aka Copper Center)</option><option value="Kobuk">Native Village of Kobuk</option><option value="Kongiganak">Native Village of Kongiganak</option><option value="Kotzebue">Native Village of Kotzebue</option><option value="Koyuk">Native Village of Koyuk</option><option value="Kwigillingok">Native Village of Kwigillingok</option><option value="Kwinhagak">Native Village of Kwinhagak (aka Quinhagak)</option><option value="Larsen Bay">Native Village of Larsen Bay</option><option value="Marshall">Native Village of Marshall (aka Fortuna Ledge)</option><option value="Mary's Igloo">Native Village of Mary's Igloo</option><option value="Mekoryuk">Native Village of Mekoryuk</option><option value="Minto">Native Village of Minto</option><option value="Nanwalek">Native Village of Nanwalek (aka English Bay)</option><option value="Napaimute">Native Village of Napaimute</option><option value="Napakiak">Native Village of Napakiak</option><option value="Napaskiak">Native Village of Napaskiak</option><option value="Nelson Lagoon">Native Village of Nelson Lagoon</option><option value="Nightmute">Native Village of Nightmute</option><option value="Nikolski">Native Village of Nikolski</option><option value="Noatak">Native Village of Noatak</option><option value="Nuiqsut">Native Village of Nuiqsut (aka Nooiksut)</option><option value="Nunam Iqua">Native Village of Nunam Iqua</option><option value="Nunapitchuk">Native Village of Nunapitchuk</option><option value="Ouzinkie">Native Village of Ouzinkie</option><option value="Paimiut">Native Village of Paimiut</option><option value="Perryville">Native Village of Perryville</option><option value="Pilot Point">Native Village of Pilot Point</option><option value="Point Hope IRA">Native Village of Point Hope</option><option value="Point Lay IRA">Native Village of Point Lay</option><option value="Port Graham">Native Village of Port Graham</option><option value="Port Heiden">Native Village of Port Heiden</option><option value="Port Lions">Native Village of Port Lions</option><option value="Ruby">Native Village of Ruby</option><option value="St. Michael IRA">Native Village of Saint Michael</option><option value="Savoonga">Native Village of Savoonga</option><option value="Scammon Bay">Native Village of Scammon Bay</option><option value="Selawik">Native Village of Selawik</option><option value="Shaktoolik">Native Village of Shaktoolik</option><option value="Shishmaref IRA">Native Village of Shishmaref</option><option value="Shungnak">Native Village of Shungnak</option><option value="Stevens Village">Native Village of Stevens</option><option value="Tanacross">Native Village of Tanacross</option><option value="Tanana">Native Village of Tanana</option><option value="Tatitlek">Native Village of Tatitlek</option><option value="Tazlina">Native Village of Tazlina</option><option value="Teller">Native Village of Teller</option><option value="Tetlin">Native Village of Tetlin</option><option value="Tuntutuliak">Native Village of Tuntutuliak</option><option value="Tununak">Native Village of Tununak</option><option value="Tyonek">Native Village of Tyonek</option><option value="Unalakleet">Native Village of Unalakleet</option><option value="Unga">Native Village of Unga</option><option value="Venetie IRA">Native Village of Venetie Tribal Government (Arctic Village and Village of Venetie)</option><option value="Wales">Native Village of Wales</option><option value="White Mountain AK">Native Village of White Mountain</option><option value="Navajo">Navajo Nation, Arizona, New Mexico &amp; Utah</option><option value="Nenana">Nenana Native Association</option><option value="New Koliganek">New Koliganek Village Council</option><option value="New Stuyahok">New Stuyahok Village</option><option value="Newhalen">Newhalen Village</option><option value="Newtok">Newtok Village</option><option value="Nez Perce">Nez Perce Tribe</option><option value="Nikolai">Nikolai Village</option><option value="Ninilchik">Ninilchik Village</option><option value="Nisqually">Nisqually Indian Tribe</option><option value="Nome">Nome Eskimo Community</option><option value="Nondalton">Nondalton Village</option><option value="Nooksack">Nooksack Indian Tribe</option><option value="Noorvik">Noorvik Native Community</option><option value="Northern Arapaho">Northern Arapaho Tribe of the Wind River Reservation, Wyoming</option><option value="Northern Cheyenne">Northern Cheyenne Tribe of the Northern Cheyenne Indian Reservation, Montana</option><option value="North Fork">Northfork Rancheria of Mono Indians of California</option><option value="Northway">Northway Village</option><option value="Northwestern Shoshone">Northwestern Band of the Shoshone Nation</option><option value="Nottawaseppi Potawatomi">Nottawaseppi Huron Band of the Potawatomi, Michigan</option><option value="Nulato">Nulato Village</option><option value="Nunakauyarmiut">Nunakauyarmiut Tribe</option><option value="Oglala Sioux">Oglala Sioux Tribe</option><option value="Ohkay Owingeh">Ohkay Owingeh, New Mexico</option><option value="Omaha">Omaha Tribe of Nebraska</option><option value="Oneida">Oneida Indian Nation</option><option value="Oneida Nation (Wisconsin)">Oneida Nation</option><option value="Onondaga">Onondaga Nation</option><option value="Grayling">Organized Village of Grayling (aka Holikachuk)</option><option value="Kake">Organized Village of Kake</option><option value="Kasaan">Organized Village of Kasaan</option><option value="Kwethluk">Organized Village of Kwethluk</option><option value="Saxman">Organized Village of Saxman</option><option value="Orutsararmiut">Orutsararmiut Traditional Native Council</option><option value="Oscarville">Oscarville Traditional Village</option><option value="Otoe-Missouria">Otoe-Missouria Tribe of Indians, Oklahoma</option><option value="Ottawa Tribe of Oklahoma">Ottawa Tribe of Oklahoma</option><option value="Paiute of Utah">Paiute Indian Tribe of Utah (Cedar Band of Paiutes, Kanosh Band of Paiutes, Koosharem Band of Paiutes, Indian Peaks Band of Paiutes, and Shivwits Band of Paiutes)</option><option value="Paiute-Shoshone">Paiute-Shoshone Tribe of the Fallon Reservation and Colony, Nevada</option><option value="Pala">Pala Band of Mission Indians</option><option value="Pamunkey Indian Tribe">Pamunkey Indian Tribe</option><option value="Pascua Yaqui">Pascua Yaqui Tribe of Arizona</option><option value="Paskenta">Paskenta Band of Nomlaki Indians of California</option><option value="Passamaquoddy Indian Township">Passamaquoddy Tribe - Indian Township</option><option value="Passamaquoddy Pleasant Point">Passamaquoddy Tribe - Pleasant Point</option><option value="Passamaquoddy Tribe">Passamaquoddy Tribe</option><option value="Pauloff Harbor">Pauloff Harbor Village</option><option value="Pauma">Pauma Band of Luiseno Mission Indians of the Pauma &amp; Yuima Reservation, California</option><option value="Pawnee">Pawnee Nation of Oklahoma</option><option value="Pechanga Band of Indians">Pechanga Band of Indians</option><option value="Pedro Bay">Pedro Bay Village</option><option value="Penobscot">Penobscot Nation</option><option value="Peoria Tribe of Indians of Oklahoma">Peoria Tribe of Indians of Oklahoma</option><option value="Petersburg">Petersburg Indian Association</option><option value="Picayune">Picayune Rancheria of Chukchansi Indians of California</option><option value="Pilot Station">Pilot Station Traditional Village</option><option value="Pinoleville">Pinoleville Pomo Nation, California</option><option value="Pit River">Pit River Tribe, California</option><option value="Pitka's Point">Pitka's Point Traditional Council</option><option value="Platinum">Platinum Traditional Village</option><option value="Poarch">Poarch Band of Creek Indians</option><option value="Pokagon">Pokagon Band of Potawatomi Indians, Michigan and Indiana</option><option value="Ponca of Oklahoma">Ponca Tribe of Indians of Oklahoma</option><option value="Ponca of Nebraska">Ponca Tribe of Nebraska</option><option value="Port Gamble">Port Gamble S'Klallam Tribe</option><option value="Portage Creek">Portage Creek Village (aka Ohgsenakale)</option><option value="Potter Valley">Potter Valley Tribe, California</option><option value="Prairie Band">Prairie Band Potawatomi Nation</option><option value="Prairie Island">Prairie Island Indian Community in the State of Minnesota</option><option value="Pribilof Islands Aleut Communities">Pribilof Islands Aleut Communities</option><option value="Pueblo of Acoma">Pueblo of Acoma, New Mexico</option><option value="Pueblo of Cochiti">Pueblo of Cochiti, New Mexico</option><option value="Pueblo of Isleta">Pueblo of Isleta, New Mexico</option><option value="Pueblo of Jemez">Pueblo of Jemez, New Mexico</option><option value="Pueblo of Laguna">Pueblo of Laguna, New Mexico</option><option value="Pueblo of Nambe">Pueblo of Nambe, New Mexico</option><option value="Pueblo of Picuris">Pueblo of Picuris, New Mexico</option><option value="Pueblo of Pojoaque">Pueblo of Pojoaque, New Mexico</option><option value="Pueblo of San Felipe">Pueblo of San Felipe, New Mexico</option><option value="Pueblo of San Ildefonso">Pueblo of San Ildefonso, New Mexico</option><option value="Pueblo of Sandia">Pueblo of Sandia, New Mexico</option><option value="Pueblo of Santa Ana">Pueblo of Santa Ana, New Mexico</option><option value="Pueblo of Santa Clara">Pueblo of Santa Clara, New Mexico</option><option value="Pueblo of Taos">Pueblo of Taos, New Mexico</option><option value="Pueblo of Tesuque">Pueblo of Tesuque, New Mexico</option><option value="Pueblo of Zia">Pueblo of Zia, New Mexico</option><option value="Puyallup">Puyallup Tribe of the Puyallup Reservation</option><option value="Pyramid Lake">Pyramid Lake Paiute Tribe of the Pyramid Lake Reservation, Nevada</option><option value="Qagan Tayagungin">Qagan Tayagungin Tribe of Sand Point</option><option value="Qawalangin">Qawalangin Tribe of Unalaska</option><option value="Quapaw Nation">Quapaw Nation</option><option value="Quartz Valley">Quartz Valley Indian Community of the Quartz Valley Reservation of California</option><option value="Quechan">Quechan Tribe of the Fort Yuma Indian Reservation, California &amp; Arizona</option><option value="Quileute">Quileute Tribe of the Quileute Reservation</option><option value="Quinault">Quinault Indian Nation</option><option value="Ramah Navajo Chapter">Ramah Navajo Chapter of the Navajo Nation</option><option value="Ramona">Ramona Band of Cahuilla, California</option><option value="Rampart">Rampart Village</option><option value="Rappahannock Tribe, Inc.">Rappahannock Tribe, Inc.</option><option value="Red Cliff">Red Cliff Band of Lake Superior Chippewa Indians of Wisconsin</option><option value="Red Lake">Red Lake Band of Chippewa Indians, Minnesota</option><option value="Redding">Redding Rancheria, California</option><option value="Redwood Valley">Redwood Valley or Little River Band of Pomo Indians of the Redwood Valley Rancheria California</option><option value="Reno-Sparks">Reno-Sparks Indian Colony, Nevada</option><option value="Resighini">Resighini Rancheria, California</option><option value="Rincon">Rincon Band of Luiseno Mission Indians of the Rincon Reservation, California</option><option value="Robinson">Robinson Rancheria</option><option value="Rosebud">Rosebud Sioux Tribe of the Rosebud Indian Reservation, South Dakota</option><option value="Round Valley">Round Valley Indian Tribes, Round Valley Reservation, California</option><option value="Sac &amp; Fox Nation of Missouri in Kansas and Nebraska">Sac &amp; Fox Nation of Missouri in Kansas and Nebraska</option><option value="Sac &amp; Fox Nation, Oklahoma">Sac &amp; Fox Nation, Oklahoma</option><option value="Sac &amp; Fox of Mississippi">Sac &amp; Fox Tribe of the Mississippi in Iowa</option><option value="Saginaw Chippewa">Saginaw Chippewa Indian Tribe of Michigan</option><option value="St. George">Saint George Island (See Pribilof Islands Aleut Communities of St. Paul &amp; St. George Islands)</option><option value="Saint Paul">Saint Paul Island (See Pribilof Islands Aleut Communities of St. Paul &amp; St. George Islands)</option><option value="Saint Regis">Saint Regis Mohawk Tribe</option><option value="Salamatof">Salamatof Tribe</option><option value="Salt River">Salt River Pima-Maricopa Indian Community of the Salt River Reservation, Arizona</option><option value="Samish">Samish Indian Nation</option><option value="San Carlos">San Carlos Apache Tribe of the San Carlos Reservation, Arizona</option><option value="San Juan">San Juan Southern Paiute Tribe of Arizona</option><option value="San Pasqual">San Pasqual Band of Diegueno Mission Indians of California</option><option value="Santa Rosa of Cahuilla">Santa Rosa Band of Cahuilla Indians, California</option><option value="Santa Rosa">Santa Rosa Indian Community of the Santa Rosa Rancheria, California</option><option value="Santa Ynez">Santa Ynez Band of Chumash Mission Indians of the Santa Ynez Reservation, California</option><option value="Santee Sioux">Santee Sioux Nation, Nebraska</option><option value="Santo Domingo">Santo Domingo Pueblo</option><option value="Sauk-Suiattle">Sauk-Suiattle Indian Tribe</option><option value="Sault Ste. Marie">Sault Ste. Marie Tribe of Chippewa Indians, Michigan</option><option value="Scotts Valley">Scotts Valley Band of Pomo Indians of California</option><option value="Seldovia">Seldovia Village Tribe</option><option value="Seminole">Seminole Tribe of Florida</option><option value="Seneca">Seneca Nation of Indians</option><option value="Seneca-Cayuga Nation">Seneca-Cayuga Nation</option><option value="Shageluk">Shageluk Native Village</option><option value="Shakopee">Shakopee Mdewakanton Sioux Community of Minnesota</option><option value="Shawnee Tribe">Shawnee Tribe</option><option value="Sherwood Valley">Sherwood Valley Rancheria of Pomo Indians of California</option><option value="Shingle Springs">Shingle Springs Band of Miwok Indians, Shingle Springs Rancheria (Verona Tract), California</option><option value="Shinnecock">Shinnecock Indian Nation</option><option value="Shoalwater">Shoalwater Bay Indian Tribe of the Shoalwater Bay Indian Reservation</option><option value="Shoshone-Bannock">Shoshone-Bannock Tribes of the Fort Hall Reservation</option><option value="Shoshone-Paiute">Shoshone-Paiute Tribes of the Duck Valley Reservation, Nevada</option><option value="Sisseton-Wahpeton">Sisseton-Wahpeton Oyate of the Lake Traverse Reservation, South Dakota</option><option value="Sitka">Sitka Tribe of Alaska</option><option value="Skagway">Skagway Village</option><option value="Skokomish">Skokomish Indian Tribe</option><option value="Skull Valley">Skull Valley Band of Goshute Indians of Utah</option><option value="Snoqualmie">Snoqualmie Indian Tribe</option><option value="Soboba">Soboba Band of Luiseno Indians, California</option><option value="Sokaogon">Sokaogon Chippewa  Community, Wisconsin</option><option value="South Naknek">South Naknek Village</option><option value="Southern Ute">Southern Ute Indian Tribe of the Southern Ute Reservation, Colorado</option><option value="Spirit Lake">Spirit Lake Tribe, North Dakota</option><option value="Spokane">Spokane Tribe of the Spokane Reservation</option><option value="Squaxin">Squaxin Island Tribe of the Squaxin Island Reservation</option><option value="St. Croix">St. Croix Chippewa Indians of Wisconsin</option><option value="Standing Rock">Standing Rock Sioux Tribe of North &amp; South Dakota</option><option value="Stebbins">Stebbins Community Association</option><option value="Stillaguamish">Stillaguamish Tribe of Indians of Washington</option><option value="Stockbridge">Stockbridge Munsee Community, Wisconsin</option><option value="Summit Lake">Summit Lake Paiute Tribe of Nevada</option><option value="Sun'aq">Sun'aq Tribe of Kodiak</option><option value="Suquamish">Suquamish Indian Tribe of the Port Madison Reservation</option><option value="Susanville">Susanville Indian Rancheria, California</option><option value="Swinomish">Swinomish Indian Tribal Community</option><option value="Sycuan">Sycuan Band of the Kumeyaay Nation</option><option value="Table Mountain">Table Mountain Rancheria</option><option value="Takotna">Takotna Village</option><option value="Tangirnaq">Tangirnaq Native Village</option><option value="Tejon">Tejon Indian Tribe</option><option value="Telida">Telida Village</option><option value="Te-Moak">Te-Moak Tribe of Western Shoshone Indians of Nevada (Four constituent bands: Battle Mountain Band; Elko Band; South Fork Band and Wells Band)</option><option value="Chickasaw Nation">The Chickasaw Nation</option><option value="The Choctaw Nation of Oklahoma">The Choctaw Nation of Oklahoma</option><option value="The Muscogee (Creek) Nation">The Muscogee (Creek) Nation</option><option value="The Osage Nation">The Osage Nation</option><option value="The Seminole Nation  of Oklahoma">The Seminole Nation of Oklahoma</option><option value="Thlopthlocco Tribal Town">Thlopthlocco Tribal Town</option><option value="Three Affiliated">Three Affiliated Tribes of the Fort Berthold Reservation, North Dakota</option><option value="Timbi-sha Shoshone">Timbisha Shoshone Tribe</option><option value="Tohono O'odham">Tohono O'odham Nation of Arizona</option><option value="Tolowa Dee-ni'">Tolowa Dee-ni' Nation</option><option value="Tonawanda">Tonawanda Band of Seneca</option><option value="Tonkawa">Tonkawa Tribe of Indians of Oklahoma</option><option value="Tonto Apache">Tonto Apache Tribe of Arizona</option><option value="Torres Martinez">Torres Martinez Desert Cahuilla Indians, California</option><option value="Togiak">Traditional Village of Togiak</option><option value="Tulalip">Tulalip Tribes of Washington</option><option value="Tule River">Tule River Indian Tribe of the Tule River Reservation, California</option><option value="Tuluksak">Tuluksak Native Community</option><option value="Tunica-Biloxi">Tunica-Biloxi Indian Tribe</option><option value="Tuolumne">Tuolumne Band of Me-Wuk Indians of the Tuolumne Rancheria of California</option><option value="Turtle Mountain">Turtle Mountain Band of Chippewa Indians of North Dakota</option><option value="Tuscarora">Tuscarora Nation</option><option value="Twenty-Nine Palms">Twenty-Nine Palms Band of Mission Indians of California</option><option value="Twin Hills">Twin Hills Village</option><option value="Ugashik">Ugashik Village</option><option value="Umkumiut">Umkumiut Native Village</option><option value="United Auburn">United Auburn Indian Community of the Auburn Rancheria of California</option><option value="United Keetoowah Band of Cherokee Indians in Oklahoma">United Keetoowah Band of Cherokee Indians in Oklahoma</option><option value="Upper Mattaponi Tribe">Upper Mattaponi Tribe</option><option value="Upper Sioux">Upper Sioux Community, Minnesota</option><option value="Upper Skagit">Upper Skagit Indian Tribe</option><option value="Ute">Ute Indian Tribe of the Uintah &amp; Ouray Reservation, Utah</option><option value="Ute Mountain Ute">Ute Mountain Ute Tribe</option><option value="Benton">Utu Utu Gwaitu Paiute Tribe of the Benton Paiute Reservation, California</option><option value="Alakanuk">Village of Alakanuk</option><option value="Anaktuvuk Pass">Village of Anaktuvuk Pass</option><option value="Aniak">Village of Aniak</option><option value="Atmautluak">Village of Atmautluak</option><option value="Bill Moore's Slough">Village of Bill Moore's Slough</option><option value="Chefornak">Village of Chefornak</option><option value="Clark's Point">Village of Clarks Point</option><option value="Crooked Creek">Village of Crooked Creek</option><option value="Dot Lake">Village of Dot Lake</option><option value="Iliamna">Village of Iliamna</option><option value="Kalskag">Village of Kalskag</option><option value="Kaltag">Village of Kaltag</option><option value="Kotlik">Village of Kotlik</option><option value="Lower Kalskag">Village of Lower Kalskag</option><option value="Ohogamiut">Village of Ohogamiut</option><option value="Red Devil">Village of Red Devil</option><option value="Sleetmute">Village of Sleetmute</option><option value="Solomon">Village of Solomon</option><option value="Stony River">Village of Stony River</option><option value="Venetie">Village of Venetie (See Native Village of Venetie Tribal Government)</option><option value="Wainwright">Village of Wainwright</option><option value="Walker River">Walker River Paiute Tribe of the Walker River Reservation, Nevada</option><option value="Wampanoag">Wampanoag Tribe of Gay Head (Aquinnah)</option><option value="Washoe">Washoe Tribe of Nevada &amp; California (Carson Colony, Dresslerville Colony, Woodfords Community, Stewart Community, &amp; Washoe Ranches)</option><option value="White Mountain">White Mountain Apache Tribe of the Fort Apache Reservation, Arizona</option><option value="Wichita">Wichita and Affiliated Tribes (Wichita, Keechi, Waco &amp; Tawakonie), Oklahoma</option><option value="Wilton">Wilton Rancheria, California</option><option value="Winnebago">Winnebago Tribe of Nebraska</option><option value="Winnemucca">Winnemucca Indian Colony of Nevada</option><option value="Wiyot">Wiyot Tribe, California</option><option value="Wrangell">Wrangell Cooperative Association</option><option value="Wyandotte Nation">Wyandotte Nation</option><option value="Yakutat">Yakutat Tlingit Tribe</option><option value="Yankton">Yankton Sioux Tribe of South Dakota</option><option value="Yavapai-Apache">Yavapai-Apache Nation of the Camp Verde Indian Reservation, Arizona</option><option value="Yavapai-Prescott">Yavapai-Prescott Indian Tribe</option><option value="Yerington">Yerington Paiute Tribe of the Yerington Colony and Campbell Ranch, Nevada</option><option value="Yocha Dehe">Yocha Dehe Wintun Nation, California</option><option value="Yomba Shoshone">Yomba Shoshone Tribe of the Yomba Reservation, Nevada</option><option value="Ysleta Del Sur">Ysleta del Sur Pueblo</option><option value="Yuhaaviatam of San Manuel Nation">Yuhaaviatam of San Manuel Nation</option><option value="Andreafski">Yupiit of Andreafski</option><option value="Yurok">Yurok Tribe of the Yurok Reservation, California</option><option value="Pueblo of Zuni">Zuni Tribe of the Zuni Reservation, New Mexico</option><option value="Other">Other</option></select></div><div class="col-lg-3">
                                                              <label for="residentialothertribalidentificationform" class="mid">d. other Local/Tribal description</label>
                                                              <input type="text" id="residentialothertribalidentificationform" class="form-control"
                                                                  name="d. other Local/Tribal description ${currentCountboi}" placeholder="Enter other Local/Tribal description" >
                                                          </div>
                                                          <div class="col-lg-5">
                                                              <label for="residentialimageidentificationform${currentCountboi}" class="mid">51. Identifying document image &nbsp; <span  style="color:red">*</span> </label>
                                                              <div class="d-flex align-items-center justify-content-center">
                                                              <input type="file" id="residentialimageidentificationform${currentCountboi}" class="form-control" name="51. Identifying document image ${currentCountboi}" >
                                                              <button type="button" class="ms-5 btn btn-danger residentialimagebtn">Remove</button>
                                                          </div></div>
                                                          <div class="mt-5 col-lg-12">
                                                            <button class="remove-boi btn btn-danger">Remove Beneficial Owner Information ${currentCountboi}</button>
                                                            </div>
                                                          </div>
                                                          </div>
                                                          </div>`;
    
                // Append the new div to the container
                document.getElementById('addboi').appendChild(newDivBoi);
    
                // Add event listener to the remove button
                newDivBoi.querySelector('.remove-boi').addEventListener('click', function() {
                    // Check if there's more than one entry
                    if (currentCountboi > 1) {
                        newDivBoi.remove(); // Remove the entry
                        currentCountboi--; // Decrement the count
                    } else {
                        alert('At least one alternate name must remain.');
                    }
                });
            } else {
                // Alert the user if the limit is reached
                alert('No more adding options.');
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
        const territories = ['AS', 'GU', 'MH', 'FM', 'MP', 'PW', 'PR', 'VI'];
    
        // List of country-state pairs
        const dropdowns = [
            { country: 'countryformation', state: 'stateofformation' },
            { country: 'currentusteritory', state: 'currentstate' },
            { country: 'typecurrentaddressjuridiction', state: 'typecurrentaddressstate' },
            { country: 'countryidentificationform', state: 'stateofidentificationform' },
            { country: 'legalresidentialaddressjuridiction', state: 'legalresidentialsstate' },
            { country: 'residentialcountryidentificationform', state: 'residentialstateofidentificationform' },
        ];
    
        dropdowns.forEach(({ country, state }) => {
            const countryDropdown = document.getElementById(country);
            const stateDropdown = document.getElementById(state);
    
            countryDropdown.addEventListener('change', function () {
                const selectedCountry = countryDropdown.value;
    
                // Check if the selected country is a territory
                if (territories.includes(selectedCountry)) {
                    stateDropdown.value = selectedCountry; // Set the state to the selected country
                    stateDropdown.disabled = true; // Disable the state dropdown
                } else {
                    stateDropdown.disabled = false; // Enable the state dropdown
                    stateDropdown.value = ''; // Reset the state dropdown value
                }
            });
        });
    });
    // Function to toggle display based on selected option
      function toggleDisplay(selectElementId, divClassToShow) {
        const selectElement = document.getElementById(selectElementId);
        const otherDiv = document.querySelector("." + divClassToShow);
        
    
        selectElement.addEventListener("change", function () {
          if (this.value === "Other") {
            otherDiv.style.display = "block";
          } else {
            otherDiv.style.display = "none";
          }
        });
      }
    
      // Call the function for each select element
      toggleDisplay("tribalidentificationform", "tribalidentificationform");
      toggleDisplay("tribaljurisdiction", "tribaljurisdiction");
      toggleDisplay("residentialTribalIdentificationForm", "residentialTribalIdentificationForm");
    
      const existingReportingCompanyCheckbox = document.getElementById("existingreportingcompany");
      const companyApplicantInputs = document.querySelectorAll("#companyapplicant input[type='text']");
      const addCompanyApplicantButton = document.getElementById("addcompanyapplicant");
    
      // Function to toggle the disabled state
      function toggleCompanyApplicantFields() {
        const isDisabled = existingReportingCompanyCheckbox.checked;
        companyApplicantInputs.forEach(input => {
            input.disabled = isDisabled;
            input.required = !isDisabled;  // Set required to false if disabled, true if enabled
        });
        addCompanyApplicantButton.disabled = isDisabled;
      }
    
      // Add event listener to the checkbox
      existingReportingCompanyCheckbox.addEventListener("change", toggleCompanyApplicantFields);
    
      // Initialize the state on page load
      toggleCompanyApplicantFields();



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

