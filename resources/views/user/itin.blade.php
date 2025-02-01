<x-app-layout>
        <d  id="appdashboard">       
        <!-- Dashboard --> 
        <div class="card shadow border-0 mb-7" id="itintabsection">
                          <div class="content">
                          <div class="py-4 px-3 px-md-4">
                          <div class="mb-3 mb-md-4 d-flex justify-content-between">
                                <div class="h3 mb-0">Application for IRS Individual Taxpayer Identification Number</div>
                              </div>
                              <div class="row my-5">
                                <div class="col-md-12">
                              <div class="alert alert-warning d-block">
                                <small class="d-block"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="An IRS individual taxpayer identification number (ITIN) is for U.S. federal tax purposes only. Before you begin: • Don't submit this form if you have, or are eligible to get, a U.S. social security number (SSN)"></i> Read before start the application.</small>
                                <small class="d-block"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter “N/A” (not applicable) on all sections of each line that don't apply to you. Don't leave any section blank. For example, line 4 should have three separate entries."></i> Enter “N/A” (not applicable) on all sections of each line that don't apply to you..  </small>
                                </div>
                                </div>
                                </div> 
  
                                <form id="itinForm" class="row g-3 formsubmission needs-validation" novalidate="" enctype="application/x-www-form-urlencoded">                                
                                <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Application type (check one box)</h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div class="radiobox form-check  form-group">
                                            <label class="form-check-label" style="display: table; width: inherit;"><input
                                                class="form-check-input" type="radio" id="newItn" name="itnType" value="New ITN"
                                                class="radio radioInput" required>Apply for a new
                                              ITIN</label>
                                            <label class="form-check-label"><input class="form-check-input" type="radio"
                                                id="renewItn" name="itnType" value="Renew ITN"
                                                class="radio radioInput form-check-label" required> Renew an
                                              existing
                                              ITIN</label>
                                          </div>
                                        </div>
                                      </div>
  
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-12 col-xl-12 mb-3 mb-md-4 form-group">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold mb-0 pe-5">Reason you're submitting Form ITIN.
                                        Caution: If you check box b, c, d, e, f, or g, you must file a U.S. federal tax
                                        return with Form ITIN unless you meet one of the exception.
                                      </h5>
                                    </div>
                                    <div class="card-body">
                                      <div>
                                        <div class="d-flex flex-column radiobox">
                                          <label class="form-check-label"><input type="radio" id="NonresidentGetITIN"
                                              name="reasonsubmit"
                                              value="Nonresident alien to get an ITIN to claim tax treaty benefit"
                                              class="radio radioInput form-check-input" required> a) Nonresident alien to get
                                            an ITIN to claim tax treaty benefit</label>
  
                                          <label class="option-a d-none form-check-label">
                                            <label for="treatycountry" class="mid required">Additional information for "a" and
                                              "f"</label>
                                            <div class="row">
                                              <div class="col-6">
                                                <input type="text" id="treatycountryfora" class="form-control" name="treatycountryfora"   placeholder="Enter Treaty Country">
                                              </div>
                                              <div class="col-6">
                                                <input type="text" id="treatyarticlenumberfora"
                                                  class="form-control" name="treatyarticlenumberfora"  
                                                  placeholder="Treaty article number">
                                              </div>
                                            </div>
                                          </label>
  
                                          <label class="form-check-label"><input type="radio" id="NonresidentFilingITIN"
                                              name="reasonsubmit" value="Nonresident alien filing a U.S. federal tax return"
                                              class="radio radioInput form-check-input" required> b) Nonresident alien filing
                                            a U.S. federal tax return</label>
  
                                          <label class="form-check-label"><input type="radio" id="BasedonDaysPresent"
                                              name="reasonsubmit"
                                              value="U.S. resident alien (based on days present in the United States) filing a U.S. federal tax return"
                                              class="radio radioInput form-check-input" required> c) U.S. resident alien
                                            <b>(based on days present in
                                            the United States)</b> filing a U.S. federal tax return</label>
  
                                          <label class="form-check-label"><input type="radio" id="dependentresidentalien"
                                              name="reasonsubmit" value="Dependent of U.S. citizen/resident alien"
                                              class="radio radioInput form-check-input" required>
                                            d) Dependent of U.S. citizen/resident alien <small class="alert-sm alert-warning alert p-1">If d, enter relationship to U.S. citizen/resident alien.</small></label>
                                          <label class="option-d d-none form-check-label">
                                            <div class="row">
                                              <div class="col-4">
                                                <input type="text" id="relationshipresidentalien" class="form-control  required"
                                                  name="relationshipresidentalien"
                                                  placeholder="Enter relationship to U.S. citizen/resident alien">
                                              </div>
                                              <div class="col-4">
                                                <input type="text" id="ssnitinresidentalienname" class="form-control required"
                                                  name="ssnitinresidentalienname"
                                                  placeholder="Enter name of U.S. citizen/resident alien">
                                              </div>
                                              <div class="col-4">
                                                <input type="text" id="ssnitinresidentalienumbber" class="form-control required"
                                                  name="ssnitinresidentalienumber"
                                                  placeholder="Enter SSN/ITIN of U.S. citizen/resident alien">
                                              </div>
                                            </div>
                                          </label>
                                          <label class="form-check-label"><input type="radio" id="spouseofuscitizen"
                                              name="reasonsubmit" value="Spouse of U.S. citizen/resident alien"
                                              class="radio radioInput form-check-input" required> e)
                                            Spouse of U.S. citizen/resident alien
                                            <small class="alert-sm alert-warning alert p-1">If d or e, enter name and SSN/ITIN of U.S. citizen/resident alien.</small>
                                          </label>
                                          <label class="option-e d-none form-check-label">
                                            <div class="row">
  
                                              <div class="col-6">
                                                <input type="text" id="spousessnitinresidentalienname" class="form-control required"
                                                  name="ssnitinresidentalienname"
                                                  placeholder="Enter name of U.S. citizen/resident alien">
                                              </div>
                                              <div class="col-6">
                                                <input type="text" id="spousessnitinresidentalienumbber"
                                                  class="form-control required" name="spousessnitinresidentalienumbber"   
                                                  placeholder="Enter SSN/ITIN of U.S. citizen/resident alien">
                                              </div>
                                            </div>
                                          </label>
                                          <label class="form-check-label"><input type="radio" id="nonresidentstudentprofessor"
                                              name="reasonsubmit"
                                              value="Nonresident alien student, professor, or researcher filing a U.S. federal tax return or claiming an exception"
                                              class="radio radioInput form-check-input" required> f) Nonresident alien
                                            student, professor, or
                                            researcher filing a U.S. federal tax return or claiming an exception</label>
  
                                          <label class="option-f d-none form-check-label">
                                            <label for="treatycountry" class="mid required">Additional information for "a" and
                                              "f"</label>
                                            <div class="row">
                                              <div class="col-6">
                                                <input type="text" id="treatycountryforf" class="form-control"
                                                  name="treatycountryforf" placeholder="Enter Treaty Country">
                                              </div>
                                              <div class="col-6">
                                                <input type="text" id="treatyarticlenumberforf"
                                                  class="form-control" name="treatyarticlenumberforf" 
                                                  placeholder="Treaty article number">
                                              </div>
                                            </div>
                                          </label>
                                          <label class="form-check-label"><input type="radio" id="dependentspousenonresident"
                                              name="reasonsubmit"
                                              value="Dependent/spouse of a nonresident alien holding a U.S. visa"
                                              class="radio radioInput form-check-input" required> g) Dependent/spouse of a
                                            nonresident alien
                                            holding a U.S. visa
                                          </label>
                                          <label class="form-check-label"><input type="radio" id="others" name="reasonsubmit"
                                              value="ReasonOther" class="radio radioInput form-check-input" required> h) Other
                                          </label>
                                          <label class="option-h d-none form-check-label">
                                            <div class="row">
                                              <div class="col-6">
                                                <input type="text" id="othersdefine" class="form-control"
                                                  name="othersdefine" placeholder="Enter Other">
                                              </div>
                                            </div>
                                          </label>
  
                                        </div>
                                      </div>
                                    </div>
                                    <!-- End Card -->
                                  </div>
                                </div>
                                <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="
                                        Enter your legal name on line 1a as it appears on your identifying documents. Be sure to properly identify your first, middle, and last names. This entry should reflect your name as it'll appear on a U.S. federal tax return."></i>1a. Name</h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div class="form-label">
                                            <label for="firstname" class="mid required">First Name:</label>
                                            <input type="text" id="firstname" class="form-control required" name="firstname"
                                              required placeholder="First Name">
                                          </div>
                                          <div class="form-label">
                                            <label for="middlename" class="mid required">Middle Name:</label>
                                            <input type="text" id="middlename" class="form-control required" name="middlename"
                                              required placeholder="Middle Name">
                                          </div>
                                          <div class="form-label">
                                            <label for="lastname" class="mid required">Last Name:</label>
                                            <input type="text" id="lastname" class="form-control  required" name="lastname" required
                                              placeholder="Last Name">
                                          </div>
                                        </div>
                                      </div>
  
                                    </div>
                                  </div>
                                  <!-- End Card -->
                                </div>
  
                                <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter your name as it appears on your birth certificate if it's different from your entry on line 1a."></i>1b. Name at birth if different (Optional)</h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div class="form-label">
                                            <label for="firstname_birth" class="mid required ">First Name:</label>
                                            <input type="text" id="firstname_birth" class="form-control required" name="firstname"
                                              required placeholder="First Name">
                                          </div>
                                          <div class="form-label">
                                            <label for="middlename_birth" class="mid required ">Middle Name:</label>
                                            <input type="text" id="middlename_birth" class="form-control required" name="middlename"
                                              required placeholder="Middle Name">
                                          </div>
                                          <div class="form-label">
                                            <label for="lastname_birth" class="mid required ">Last Name:</label>
                                            <input type="text" id="lastname_birth" class="form-control  required" name="lastname"
                                              required placeholder="Last Name">
                                          </div>
                                        </div>
                                      </div>
  
                                    </div>
                                  </div>
                                  <!-- End Card -->
                                </div>
                                <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter your date of birth in the month/day/year (MM/DD/YYYY) format, where MM = 1 to 12 and DD = 1 to 31. To be eligible for an ITIN, your birth country must be recognized as a foreign country by the U.S. Department of State"></i>4. Birth Information</h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div>
                                            <label for="dob" class="mid required">Date of Birth: (month/day/year)</label>
                                            <div class="d-flex">
                                              <input type="text" id="dobMONTH" pattern="[0-9]{1,2}" placeholder="MM"
                                                class="form-control required" maxlength="2" size="2" name="dobMONTH" required>
                                              <input type="text" id="dobDAY" pattern="[0-9]{1,2}" placeholder="DD"
                                                class="form-control required" name="dobDAY" required maxlength="2" size="2">
                                              <input type="text" id="dobYEAR" pattern="[0-9]{4}" placeholder="YYYY"
                                                class="form-control required" name="dobYEAR" required maxlength="4" size="4">
                                            </div>
                                          </div>
                                          <div id="dobFeedback" class="invalid-feedback" style="display: none;"></div>
  
                                          <div>
                                            <label for="cob" class="mid required">Country of Birth:</label>
                                            <select id="cob" class="form-control required form-select" name="cob" required>
                                                <option value="" disabled selected>Select your country</option>
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
                                          <div>
                                            <label for="birthcitystate" class="mid required">City and state or province
                                              (optional):</label>
                                            <input type="text" id="birthcitystate" placeholder="Birth City"
                                              class="form-control required" name="birthcitystate" required>
                                          </div>
                                          <div>
                                            <label for="genderType" class="mid required">Gender:</label>
                                            <div style="display: flex; text-transform: uppercase;">
                                              <label class="form-check-label" style="display: table; width: inherit;"><input
                                                  type="radio" id="maleItn" name="genderType" value="Male"
                                                  class="radio radioInput  form-check-input" required>
                                                Male</label>
                                              <label class="mx-3 form-check-label"><input type="radio" id="femaleItn"
                                                  name="genderType" value="Female" class="radio radioInput form-check-input"
                                                  required> Female</label>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
  
                                    </div>
                                  </div>
                                  <!-- End Card -->
                                </div>
                                <div class="col-md-6 col-xl-6 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter your complete mailing address on line 2. This is the address the IRS will use to return your original documents and send written notification of your ITIN application status."></i>2. Applicant's Mailing Address
                                      </h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div>
                                            <label for="mailingstreet" class="mid required">Street address, apartment number, or
                                              rural route number.</label>
                                            <input type="text" id="mailingstreet" placeholder="Mailing Street" class="form-control"
                                              name="mailingstreet" required>
                                          </div>
                                          <div>
                                            <label for="mailingcitystate" class="mid required">City or town, state or province,
                                              and country.</label>
                                            <input type="text" id="mailingcitystate" placeholder="Mailing City/State"
                                              class="form-control" name="mailingcitystate" required>
                                          </div>
                                        </div>
                                      </div>
  
                                    </div>
                                  </div>
                                  <!-- End Card -->
                                </div>
  
                                <div class="col-md-6 col-xl-6 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter your complete foreign (non-U.S.) address in the country where you permanently or normally reside, even if it's the same as the address on line 2. If you no longer have a permanent foreign residence due to your relocation to the United States, enter only the foreign country where you last resided on line 3. If you're claiming a benefit under an income tax treaty with the United States, the income tax treaty country must be the same as the country listed on line 3."></i> 3. Foreign (non- U.S.) Address
                                      </h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div>
                                            <label for="foreignstreet" class="mid required">Street address, apartment number, or
                                              rural route number.</label>
                                            <input type="text" id="foreignstreet" placeholder="Foreign Street" class="form-control"
                                              name="foreignstreet" required>
                                          </div>
                                          <div>
                                            <label for="foreigncitystate" class="mid required">City or town, state or province,
                                              and country. Include postal code where appropriate</label>
                                            <input type="text" id="foreigncitystate" placeholder="Foreign City/State"
                                              class="form-control" name="foreigncitystate" required>
                                          </div>
                                        </div>
                                      </div>
  
                                    </div>
                                  </div>
                                  <!-- End Card -->
                                </div>
  
                                <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex align-items-center">
                                      <div class="icon icon-lg bg-soft-primary rounded-circle mr-3">
                                        <i class="gd-info-alt icon-text d-inline-block text-primary"></i>
                                      </div>
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Other Information</h5>
                                    </div>
                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body row flex-wrap">
                                          <div class="mb-5 col-lg-3">
                                            <label for="emailitin" class="mid">Email:</label>
                                            <input type="text" class="form-control" id="card_email"
                                                placeholder="Enter Email" name="card_email"
                                                maxlength="16" required>
                                        </div>
                                        <div class="mb-5 col-lg-9">&nbsp;</div>
                                          <div class="col-lg-3">
                                            <label for="countryofcitizenship" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the country or countries (in the case of dual citizenship) in which you're a citizen. Enter the complete country name; don't abbreviate."></i> 6a) Country(ies) of
                                              citizenship</label>
                                            <input type="text" id="countryofcitizenship" placeholder="Country of citizenship"
                                              class="form-control" name="countryofcitizenship" required>
                                          </div>
                                          <div class="col-lg-3">
                                            <label for="foreigntaxidnumber" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="If your country of residence for tax purposes has issued you a tax identification number, enter that number on line 6b. For example, if you're a resident of Canada, enter your Canadian social security number (known as the Canadian Social Insurance Number)"></i> 6b) Foreign tax I.D. number (if any)</label>
                                            <input type="text" id="foreigntaxidnumber" placeholder="Foreign Tax ID"
                                              class="form-control" name="foreigntaxidnumber" required>
                                          </div>
                                          <div class="col-lg-3">
                                            <label for="typeofusvisanumber" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter only U.S. nonimmigrant visa information. Include the USCIS classification, number of the U.S. visa, and the expiration date in month/day/year format. For example, if you have an F-1/F-2 visa with the number 123456, enter, in the entry space, F-1/F-2 and 123456, followed by the visa's expiration date in MM/DD/YYYY format. Individuals in possession of an I-20/I-94 document(s) should attach a copy to their Form W-7"></i> 6c) Type of U.S. visa (if any),
                                              number</label>
                                            <input type="text" id="typeofusvisanumber" placeholder="Type of Visa"
                                              class="form-control" name="typeofusvisanumber" required>
                                          </div>
                                          <div class="col-lg-3">
                                            <label for="visaexpirydate" class="mid required">Expiration Date</label>
                                              <div class="d-flex">
                                                <input type="text" id="visaexpirydateMo" pattern="[0-9]{1,2}" placeholder="MM" class="form-control required" maxlength="2" size="2" name="visaexpirydateMo" required="">
                                                <input type="text" id="visaexpirydateDay" pattern="[0-9]{1,2}" placeholder="DD" class="form-control required" name="visaexpirydateDay" required="" maxlength="2" size="2">
                                                <input type="text" id="visaexpirydateYEAR" pattern="[0-9]{4}" placeholder="YYYY" class="form-control required" name="visaexpirydateYEAR" required="" maxlength="4" size="4">
                                              </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <label for="identificationdocument" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Check the box indicating the type of document(s) you're submitting to prove your identity. Enter the name of the state or country or other issuer, the identification number (if any) appearing on the document(s), the expiration date, and the date on which you entered the United States. Dates must be entered in the month/day/year format."></i> 6d) Identification
                                              document(s) submitted</label>
                                            <div class="radiobox">
                                              <label class="form-check-label" style="display: table; width: inherit;">
                                                <input type="radio" id="passport" name="identificationdocument" value="Passport"
                                                  class="radio radioInput form-check-input" required>
                                                Passport</label>
                                              <label class="form-check-label"><input type="radio" id="driverlicense"
                                                  name="identificationdocument" value="Driver's license/Stat/ I.D"
                                                  class="radio radioInput form-check-input" required> Driver's
                                                license/State I.D.</label>
                                              <label class="form-check-label"><input type="radio" id="uscisdocument"
                                                  name="identificationdocument" value="USCIS documentation"
                                                  class="radio radioInput form-check-input" required> USCIS
                                                documentation</label>
                                              <label class="form-check-label"><input type="radio" id="otherdocument"
                                                  name="identificationdocument" value="Other document"
                                                  class="radio radioInput form-check-input" required> Other</label>
                                            </div>
                                            <div>
                                              <div class="option-6dother d-none">
                                                <input type="text" id="mentionotherdocument" placeholder="Others"
                                                  class="form-control" name="mentionotherdocument">
                                              </div>
                                            </div>
                                          </div>
  
                                          <div class="col-lg-3">
                                            <label for="issueby" class="mid required">Issue By</label>
                                            <input type="text" id="issueby" placeholder="Issue By" class="form-control required"
                                              name="issueby" required>
                                          </div>
                                          <div class="col-lg-3">
                                            <label for="issuebyno" class="mid required">No.
                                            </label>
                                            <input type="text" id="issuebyno" placeholder="No." class="form-control required"
                                              name="issuebyno" required>
                                          </div>
                                          <div class="col-lg-3">
                                            <label for="issuebyexpirydate" class="mid required">Expiration Date
                                            </label>
                                            <div class="d-flex">
                                              <input type="text" id="issuebyexpiryMONTH" pattern="[0-9]*" placeholder="01"
                                                class="form-control required" name="issuebyexpiryMONTH" required maxlength="2"
                                                size="2">
                                              <input type="text" id="issuebyexpiryDAY" pattern="[0-9]*" placeholder="01"
                                                class="form-control required" name="issuebyexpiryDAY" required maxlength="2"
                                                size="2">
                                              <input type="text" id="issuebyexpiryYEAR" pattern="[0-9]*" placeholder="1999"
                                                class="form-control required" name="issuebyexpiryYEAR" required maxlength="4"
                                                size="4">
                                            </div>
                                          </div>
                                          <div class="col-lg-3">
                                            <label for="dateofentryintotheusa" class="mid required">Date of entry into the USA
                                            </label>
                                            <div class="d-flex">
                                              <input type="text" id="dateofentryintotheusaMONTH" pattern="[0-9]*" placeholder="01"
                                                class="form-control required" name="dateofentryintotheusaMONTH" required
                                                maxlength="2" size="2">
                                              <input type="text" id="dateofentryintotheusaDAY" pattern="[0-9]*" placeholder="01"
                                                class="form-control required" name="dateofentryintotheusaDAY" required maxlength="2"
                                                size="2">
                                              <input type="text" id="dateofentryintotheusaYEAR" pattern="[0-9]*" placeholder="1999"
                                                class="form-control required" name="dateofentryintotheusaYEAR" required
                                                maxlength="4" size="4">
                                            </div>
                                          </div>
                                          <div class="col-lg-12">
                                            <label for="previouslyreceiveditin" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="If you ever received an ITIN and/or an Internal Revenue Service Number (IRSN), check the “Yes” box and complete line 6f. If you never had an ITIN or an IRSN, or if you don't know your ITIN or IRSN, check the No/Don't know box."></i> 6e) Have you previously
                                              received an ITIN or an Internal Revenue Service Number (IRSN)</label>
                                            <div class="radiobox">
                                              <label class="form-check-label">
                                                <input type="radio" id="previouslyreceiveditin" name="previouslyreceiveditin"
                                                  value="No/Dont Know" class="radio radioInput form-check-input" required> No/Don't
                                                know.</label>
                                              <label class="form-check-label">
                                                <input type="radio" id="yesreceiveditin" name="previouslyreceiveditin"
                                                  value="Yes (Complete Line 6f)" class="radio radioInput form-check-input" required>
                                                Yes (Complete
                                                Line 6f)</label>
                                            </div>
                                          </div>
                                          <div class="col-lg-12 option-6f d-none">
                                            <label for="enteritinnumber" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="If you have an ITIN and/or an IRSN, list them in the space(s) provided. Identify your first, middle, and last name under which the ITIN and/or IRSN was issued. If you were issued more than one IRSN, attach a separate sheet listing all the IRSNs you received. On the separate sheet, be sure to write your name and “Form W-7” at the top."></i> 6f) Enter Previous ITIN and/or
                                              IRSN (XXX-XX-XXXX)</label>
                                            <div class="row">
                                              <div class="col-6">
                                                <h6>Enter Previous ITIN information </h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber1"
                                                    name="enteritinnumber1" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber2"
                                                    name="enteritinnumber2" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber3"
                                                    name="enteritinnumber3" class="form-control px-none-none-2"><span class="mx-4">-</span>
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber4"
                                                    name="enteritinnumber4" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber5"
                                                    name="enteritinnumber5" class="form-control px-none-none-2"><span class="mx-4">-</span>
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber6"
                                                    name="enteritinnumber6" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber7"
                                                    name="enteritinnumber7" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber8"
                                                    name="enteritinnumber8" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enteritinnumber9"
                                                    name="enteritinnumber9" class="form-control px-none-none-2">
                                                </div>
  
                                              </div>
                                              <div class="col-6">
                                                <h6>Enter Previous ITIN information </h6>
                                                <div class="d-flex align-items-center justify-content-between">
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber1"
                                                    name="enterirsnnumber1" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber2"
                                                    name="enterirsnnumber2" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1"  id="enterirsnnumber3"
                                                    name="enterirsnnumber3" class="form-control px-none-none-2"><span class="mx-4">-</span>
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber4"
                                                    name="enterirsnnumber4" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber5"
                                                    name="enterirsnnumber5" class="form-control px-none-none-2"><span class="mx-4">-</span>
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber6"
                                                    name="enterirsnnumber6" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber7"
                                                    name="enterirsnnumber7" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber8"
                                                    name="enterirsnnumber8" class="form-control px-none-none-2">
                                                  <input type="text" maxlength="1" size="1" id="enterirsnnumber9"
                                                    name="enterirsnnumber9" class="form-control px-none-none-2">
                                                </div>
                                              </div>
                                              <div class="col-12">
                                                <label for="firstnameunderissued" class="mid required">Name under which it was issued
                                                </label>
                                              </div>
                                              <div class="col-4">
                                                <input type="text" id="firstnameunderissued" placeholder="First Name"
                                                  class="form-control" name="firstnameunderissued"
                                                  placeholder="Enter First Name">
                                              </div>
                                              <div class="col-4">
                                                <input type="text" id="middlenameunderissued" placeholder="Middle Name"
                                                  class="form-control" name="middlenameunderissued"
                                                  placeholder="Enter Middle Name">
                                              </div>
                                              <div class="col-4">
                                                <input type="text" id="lastnameunderissued" placeholder="Last Name"
                                                  class="form-control" name="lastnameunderissued"
                                                  placeholder="Enter Last Name">
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-4">
                                                <label for="collegeuniversityfirstname" class="mid required"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="If you checked reason f, you must enter the name of the educational institution and the city and state in which it's located. You must also enter your length of stay in the United States"></i> 6g) Name of college/university or company</label>
                                                <input type="text" id="collegeuniversityfirstname" placeholder="College Name"
                                                  class="form-control required" name="collegeuniversityfirstname"
                                                  placeholder="Enter College/University Name">
                                              </div>
                                              <div class="col-4">
                                                <label for="collegeuniversitycity" class="mid required">City and
                                                  state</label>
                                                <input type="text" id="collegeuniversitycity" placeholder="College City"
                                                  class="form-control" name="collegeuniversitycity"
                                                  placeholder="Enter City and State">
                                              </div>
                                              <div class="col-4">
                                                <label for="collegeuniversitylenghtstay" class="mid required">Length of
                                                  stay</label>
                                                <input type="text" id="collegeuniversitylenghtstay" placeholder="Lenght of Stay"
                                                  class="form-control required" name="collegeuniversitylenghtstay"
                                                  placeholder="Enter Length of stay">
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
  
                                  </div>
                                </div>
                                <!-- End Card -->
  
                                <div class="col-md-6 col-xl-12 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                      <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Sign Here</h5>
                                    </div>
                                    <div class="card-body">
  
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <p>Under penalties of perjury, I (applicant/delegate/acceptance agent) declare
                                            that I have examined this application, including accompanying documentation
                                            and statements, and to the best of my knowledge and belief, it is true,
                                            correct, and complete. I authorize the IRS to share information with my
                                            acceptance agent in order to perfect this Form ITIN, Application for IRS
                                            Individual Taxpayer Identification Number.
                                          </p>
                                          <div class="row">
                                            
                                            <div class="col-lg-4 d-none">
                                              <label for="dateofapplication" class="mid required">Date</label>
                                              <div class="d-flex">
                                                <input type="text" id="dateofapplicationMONTH" pattern="[0-9]*" placeholder="01"
                                                  class="form-control required" name="dateofapplicationMONTH"  maxlength="2"
                                                  size="2">
                                                <input type="text" id="dateofapplicationDAY" pattern="[0-9]*" placeholder="01"
                                                  class="form-control required" name="dateofapplicationDAY" maxlength="2"
                                                  size="2">
                                                <input type="text" id="dateofapplicationYEAR" pattern="[0-9]*" placeholder="1999"
                                                  class="form-control required" name="dateofapplicationYEAR" maxlength="4"
                                                  size="4">
                                              </div>
                                            </div>
  
                                            <div class="col-lg-4 d-none">
                                              <label for="contactnumber" class="mid required">Phone number</label>
                                              <input type="text" id="contactnumber" pattern="[0-9]*" placeholder="001234678900"
                                                class="form-control" name="contactnumber">
                                            </div>
  
                                            <div class="col-lg-12">
                                              <label for="nameofdelegate" class="mid required">Name of delegate, if
                                                applicable</label>
                                              <input type="text" id="nameofdelegate" placeholder="Name of Delegate"
                                                class="form-control" name="nameofdelegate" required>
                                            </div>
  
                                            <div class="col-lg-4">
                                              <label for="delegaterelationship" class="mid required"> Delegate's relationship to applicant</label>
                                              <div class="radiobox">
                                                <label class="form-check-label" style="display: table; width: inherit;">
                                                  <input type="radio" id="parent" name="delegaterelationship" value="Parent"
                                                    class="radio radioInput form-check-input">
                                                  Parent
                                                </label>
                                                <label class="form-check-label" style="display: table; width: inherit;"><input
                                                    type="radio" id="courtappointed" name="delegaterelationship"
                                                    value="Court-appointed guardian" class="radio radioInput form-check-input">
                                                  Court-appointed guardian</label>
                                                <label class="form-check-label">
                                                  <input type="radio" id="powerofattorney" name="delegaterelationship"
                                                    value="Power of attorney" class="radio radioInput form-check-input">
                                                  Power of attorney
                                                </label>
                                              </div>
                                            </div>
  
  
                                          </div>
                                        </div>
  
                                      </div>
                                    </div>
                                    <!-- End Card -->
                                  </div>
                                </div>
                                <div class="col-md-6 col-xl-12 mb-3 mb-md-4">
                                  <!-- Card -->
                                  <div class="card h-100">
                                    <div class="card-header d-flex">
                                        <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Third Party Acceptance Agent</h5>
                                    </div>

                                    <div class="card-body">
                                      <div class="media align-items-center px-none-none-3 px-none-none-md-4 mb-3 mb-md-4">
                                        <div class="media-body">
                                          <div class="row">
                                            <div class="col-lg-12">
                                                <label for="regagent" class="mid">Choose Prompt Filing as 3rd Party Acceptance Agent</label>
                                                <div class="radiobox">
                                                    <label>
                                                        <input type="radio" id="regagentYes" name="regagent" value="PromptfilingsActAgent" class="radio">
                                                        Yes</label>
                                                    <label>
                                                        <input type="radio" id="regagentNo" name="regagent" value="OwnActAgent" class="radio  "> No</label>
                                                </div>
                                            </div></div>
                                            <div class="acceptenceagent row" style="display: none;">
                                            <div class="col-lg-3 d-none">
                                              <label for="signatureofagent" class="mid ">Signature</label>
                                              <input type="file" id="signatureofagent" class="form-control" name="signatureofagent">
                                            </div>
                                            <div class="col-lg-3">
                                              <label for="dateofagent" class="mid ">Date</label>
                                              <div class="d-flex">
                                                <input type="text" id="dateofagentMONTH" class="form-control "
                                                  name="dateofagentMONTH"  maxlength="2" size="2">
                                                <input type="text" id="dateofagentDAY" class="form-control "
                                                  name="dateofagentDAY"  maxlength="2" size="2">
                                                <input type="text" id="dateofagentYEAR" class="form-control "
                                                  name="dateofagentYEAR"  maxlength="4" size="4">
                                              </div>
                                            </div>
  
                                            <div class="col-lg-3">
                                              <label for="agentcontactnumber" class="mid required">Phone number</label>
                                              <input type="text" id="agentcontactnumber" class="form-control"
                                                name="agentcontactnumber" >
                                            </div>  
                                            <div class="col-lg-3">
                                              <label for="agentfaxnumber" class="mid ">Fax number</label>
                                              <input type="text" id="agentfaxnumber" class="form-control"
                                                name="agentfaxnumber" >
                                            </div>
  
                                            <div class="col-lg-3">
                                              <label for="nameofagent" class="mid ">Name and title</label>
                                              <input type="text" id="nameofagent" class="form-control" name="nameofagent" >
                                            </div>
  
                                            <div class="col-lg-3">
                                              <label for="agentcompanyname" class="mid "> Name of company</label>
                                              <input type="text" id="agentcompanyname" class="form-control" name="agentcompanyname"
                                                >
                                            </div>
  
                                            <div class="col-lg-3">
                                              <label for="agentein" class="mid "> EIN</label>
                                              <input type="text" id="agentein" class="form-control" name="agentein" >
                                            </div>
  
  
                                            <div class="col-lg-3">
                                              <label for="agentptin" class="mid "> PTIN</label>
                                              <input type="text" id="agentptin" class="form-control" name="agentptin" >
                                            </div>
  
                                            <div class="col-lg-3">
                                              <label for="officecode" class="mid required"> Office Code</label>
                                              <input type="text" id="officecode" class="form-control" name="officecode" >
                                            </div>
                                          </div>
                                        </div>

                                        </div>
  
                                      </div>
                                    </div>
                                    <!-- End Card -->
                                  </div>
                                </div>

                                <div class="col-md-12 col-xl-12 mb-3 mb-md-4">
                                        <div class="card h-100">
                                             <div class="card-body">
                                            <div class="media-body row" id="ordersummary"> 
                                                    <div class="col-lg-12"> 

    <div class="alert alert-primary mt-5 d-none">
                                                            <h4>You'll Pay: <span id="totalpricing"
                                                                    name="totalpricing">$309.57</span></h4>
                                                            <div class="d-none">
                                                              <input type="text" id="service" name="service" value="BOI Reporting Service" readonly>
                                                              <input type="text" id="authpricing" name="authpricing" value="309.57" readonly></div>
                                                        </div>

                                                        <table cellpadding="5" cellspacing="0" width="100%" class="border  table pricingtable">
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
                                                                    <p class="mb-3"><span id="pfservicefee">$299.00</span></p>
                                                                </td>
                                                            </tr>
  
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">State Filing: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="statefeeprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">Expedited Services: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="expeditedprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">EIN Tax ID Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="eintaxidprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">PF Resident Agent Fee (per year):
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="pfresidentfee">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">S CORP Election Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="scorpelectionprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">Corporate/LLC KIT Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span id="llckitprice">$0.00</span>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
                                                                <td>
                                                                    <p class="mb-3">Plain Copy Fee: </p>
                                                                </td>
                                                                <td>
                                                                    <p class="mb-3"><span
                                                                            id="plaincopyprice">$0.00</span></p>
                                                                </td>
                                                            </tr>
                                                            <tr style="display:none">
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
                                                                            id="totalpricing2">$309.57</span></h2>
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
                                                                    data-package-name="ITIN Application"
                                                                    data-package-price="299.315" 
                                                                    id="itinformvalidate">Pay Now to Submit Application</button>
                                                            </div>
                                                            <div class="my-2 col-md-12 p-0"><img
                                                                    src="https://promptfilings.com/wp-content/themes/astra/assets/authnet/authorizemerchant.jpg"
                                                                    alt="Authorize.net Merchant">
                                                            </div>
                                              
                                    </div>
                                    </div></div></div>
  
          <div class="col-md-12 mt-3 p-5"><small>Disclaimer: Please note that the link provided directs to an IRS document. If you are uncertain about how to fill out the form or interpret its contents, it is advisable to seek assistance from a tax professional or refer to the IRS guidelines. Tax documents can be complex, and proper completion is crucial to ensure compliance with tax laws. <a href="https://www.irs.gov/pub/irs-pdf/iw7.pdf" target="_blank"></a>https://www.irs.gov/pub/irs-pdf/iw7.pdf</small></div>
   
    
                              </form>   
                            </div>
                          </div>
                        <div class="formpreview column col-12 d-none" >
                             <iframe class="pdf-preview" id="pdfPreviewitin" src="/img/formw7.pdf" type="application/pdf" width="100%" height="600">
                            </iframe>
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
                    <input type="hidden" id="packageNameDisplay" name="package_name" value="ITIN Application">
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
                        <input type="password" class="form-control" id="card_code" name="card_code" required maxlength="3">
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
const formFields = document.querySelectorAll("#itinForm input:not(#confidetails input):not(#authpricing), #itinForm select:not([disabled]):not(#authpricing), #itinForm textarea:not(#confidetails textarea):not(#authpricing)");

var formein = document.getElementById("itinForm");

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
document.getElementById('confirmBtn').addEventListener('click', function(e) {
    e.preventDefault();
    const modal = document.getElementById('reviewModal');
    modal.style.display = "none"; // Close the modal after confirmation
    // You can add any additional logic here for form submission or processing
});
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-storage.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-auth.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://promptfilings.com/wp-content/themes/astra/assets/js/pdf-lib.min.js"></script>
<script src="https://promptfilings.com/wp-content/themes/astra/assets/js/toggle.js"></script> 
 <script defer>var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
return new bootstrap.Tooltip(tooltipTriggerEl)});</script>		
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>



<script>



    
document.getElementById("dobMONTH").addEventListener("input", validateDOB);
    document.getElementById("dobDAY").addEventListener("input", validateDOB);
    document.getElementById("dobYEAR").addEventListener("input", validateDOB);

    function validateDOB() {
      var month = document.getElementById("dobMONTH").value;
      var day = document.getElementById("dobDAY").value;
      var year = document.getElementById("dobYEAR").value;

      var feedback = document.getElementById("dobFeedback");

      var isValid = true;
      var message = "";

      if (month < 1 || month > 12 || day < 1 || day > 31 || year < 1950 || year > 2050) {
        isValid = false;
        message = "Invalid date of birth. Please enter a valid date.";
      }

      feedback.textContent = message;
      if (isValid) {
        feedback.style.display = "none";
      } else {
        feedback.style.display = "block";
      }
    }
    // Array of country names
    var countries = [
      "Afghanistan",
      "Albania",
      "Algeria",
      "Andorra",
      "Angola",
      "Antigua and Barbuda",
      "Argentina",
      "Armenia",
      "Australia",
      "Austria",
      "Azerbaijan",
      "Bahamas",
      "Bahrain",
      "Bangladesh",
      "Barbados",
      "Belarus",
      "Belgium",
      "Belize",
      "Benin",
      "Bhutan",
      "Bolivia",
      "Bosnia and Herzegovina",
      "Botswana",
      "Brazil",
      "Brunei",
      "Bulgaria",
      "Burkina Faso",
      "Burundi",
      "Cabo Verde",
      "Cambodia",
      "Cameroon",
      "Canada",
      "Central African Republic",
      "Chad",
      "Chile",
      "China",
      "Colombia",
      "Comoros",
      "Congo",
      "Costa Rica",
      "Croatia",
      "Cuba",
      "Cyprus",
      "Czech Republic",
      "Denmark",
      "Djibouti",
      "Dominica",
      "Dominican Republic",
      "Ecuador",
      "Egypt",
      "El Salvador",
      "Equatorial Guinea",
      "Eritrea",
      "Estonia",
      "Eswatini",
      "Ethiopia",
      "Fiji",
      "Finland",
      "France",
      "Gabon",
      "Gambia",
      "Georgia",
      "Germany",
      "Ghana",
      "Greece",
      "Grenada",
      "Guatemala",
      "Guinea",
      "Guinea-Bissau",
      "Guyana",
      "Haiti",
      "Honduras",
      "Hungary",
      "Iceland",
      "India",
      "Indonesia",
      "Iran",
      "Iraq",
      "Ireland",
      "Israel",
      "Italy",
      "Jamaica",
      "Japan",
      "Jordan",
      "Kazakhstan",
      "Kenya",
      "Kiribati",
      "Kosovo",
      "Kuwait",
      "Kyrgyzstan",
      "Laos",
      "Latvia",
      "Lebanon",
      "Lesotho",
      "Liberia",
      "Libya",
      "Liechtenstein",
      "Lithuania",
      "Luxembourg",
      "Madagascar",
      "Malawi",
      "Malaysia",
      "Maldives",
      "Mali",
      "Malta",
      "Marshall Islands",
      "Mauritania",
      "Mauritius",
      "Mexico",
      "Micronesia",
      "Moldova",
      "Monaco",
      "Mongolia",
      "Montenegro",
      "Morocco",
      "Mozambique",
      "Myanmar",
      "Namibia",
      "Nauru",
      "Nepal",
      "Netherlands",
      "New Zealand",
      "Nicaragua",
      "Niger",
      "Nigeria",
      "North Korea",
      "North Macedonia",
      "Norway",
      "Oman",
      "Pakistan",
      "Palau",
      "Palestine",
      "Panama",
      "Papua New Guinea",
      "Paraguay",
      "Peru",
      "Philippines",
      "Poland",
      "Portugal",
      "Qatar",
      "Romania",
      "Russia",
      "Rwanda",
      "Saint Kitts and Nevis",
      "Saint Lucia",
      "Saint Vincent and the Grenadines",
      "Samoa",
      "San Marino",
      "Sao Tome and Principe",
      "Saudi Arabia",
      "Senegal",
      "Serbia",
      "Seychelles",
      "Sierra Leone",
      "Singapore",
      "Slovakia",
      "Slovenia",
      "Solomon Islands",
      "Somalia",
      "South Africa",
      "South Korea",
      "South Sudan",
      "Spain",
      "Sri Lanka",
      "Sudan",
      "Suriname",
      "Sweden",
      "Switzerland",
      "Syria",
      "Taiwan",
      "Tajikistan",
      "Tanzania",
      "Thailand",
      "Timor-Leste",
      "Togo",
      "Tonga",
      "Trinidad and Tobago",
      "Tunisia",
      "Turkey",
      "Turkmenistan",
      "Tuvalu",
      "Uganda",
      "Ukraine",
      "United Arab Emirates",
      "United Kingdom",
      "United States",
      "Uruguay",
      "Uzbekistan",
      "Vanuatu",
      "Vatican City",
      "Venezuela",
      "Vietnam",
      "Yemen",
      "Zambia",
      "Zimbabwe",
      "Antigua and Barbuda",
      "Bahamas",
      "Barbados",
      "Belize",
      "Botswana",
      "Brunei",
      "Burundi",
      "Cabo Verde",
      "Comoros",
      "Djibouti",
      "Dominica",
      "Equatorial Guinea",
      "Eswatini",
      "Grenada",
      "Guinea-Bissau",
      "Guyana",
      "Kiribati",
      "Lesotho",
      "Maldives",
      "Marshall Islands",
      "Mauritius",
      "Micronesia",
      "Nauru",
      "Palau",
      "Saint Kitts and Nevis",
      "Saint Lucia",
      "Saint Vincent and the Grenadines",
      "Samoa",
      "Sao Tome and Principe",
      "Seychelles",
      "Singapore",
      "Solomon Islands",
      "Suriname",
      "Tonga",
      "Trinidad and Tobago",
      "Tuvalu",
      "Vanuatu",
      "American Samoa",
      "Anguilla",
      "Aruba",
      "Bermuda",
      "British Virgin Islands",
      "Cayman Islands",
      "Cook Islands",
      "Falkland Islands",
      "Faroe Islands",
      "French Polynesia",
      "Gibraltar",
      "Greenland",
      "Guam",
      "Hong Kong",
      "Macao",
      "Montserrat",
      "New Caledonia",
      "Niue",
      "Norfolk Island",
      "Northern Mariana Islands",
      "Pitcairn Islands",
      "Puerto Rico",
      "Tokelau",
      "Wallis and Futuna"
    ];

    // Populate the dropdown menu with countries
    var selectElement = document.getElementById("cob");
    countries.forEach(function (country) {
      var option = document.createElement("option");
      option.text = country;
      option.value = country;
      selectElement.add(option);
    
    }); 

    document.getElementById("itinformvalidate").addEventListener("click", function(event) {
    var formein = document.getElementById("itinForm");
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
        itinupdatePdf();
      }
});


document.querySelector(".formsubmission").addEventListener("submit", function (e) {
    e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this); 

    // Start processing the PDF generation
    var blobUrl = document.getElementById('pdfPreviewitin').getAttribute('src');

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

    async function itinupdatePdf() {
    
      const itnType = document.querySelector('input[name="itnType"]:checked').value;
      const reasonSubmit = document.querySelector('input[name="reasonsubmit"]:checked').value;
      const documenttype = document.querySelector('input[name="identificationdocument"]:checked').value;
      const previouslyreceiveditin = document.querySelector('input[name="previouslyreceiveditin"]:checked').value;
      const delegaterelationship = document.querySelector('input[name="delegaterelationship"]:checked').value;

      const treatycountryfora = document.getElementById('treatycountryfora').value;
      const treatyarticlenumberfora = document.getElementById('treatyarticlenumberfora').value;
      const treatycountryforf = document.getElementById('treatycountryforf').value;
      const treatyarticlenumberforf = document.getElementById('treatyarticlenumberforf').value;

      const spousessnitinresidentalienname = document.getElementById('spousessnitinresidentalienname').value;
      const spousessnitinresidentalienumbber = document.getElementById('spousessnitinresidentalienumbber').value;
      const relationshipresidentalien = document.getElementById('relationshipresidentalien').value;
      const ssnitinresidentalienname = document.getElementById('ssnitinresidentalienname').value;
      const ssnitinresidentalienumbber = document.getElementById('ssnitinresidentalienumbber').value;
      const othersdefine = document.getElementById('othersdefine').value;
      const mailingstreet = document.getElementById('mailingstreet').value;
      const mailingcitystate = document.getElementById('mailingcitystate').value;
      const foreignstreet = document.getElementById('foreignstreet').value;
      const foreigncitystate = document.getElementById('foreigncitystate').value;
      const mentionotherdocument = document.getElementById('mentionotherdocument').value;
      const issueby = document.getElementById('issueby').value;
      const issuebyno = document.getElementById('issuebyno').value;
      const issuebyexpiryMONTH = document.getElementById('issuebyexpiryMONTH').value;
      const issuebyexpiryDAY = document.getElementById('issuebyexpiryDAY').value;
      const issuebyexpiryYEAR = document.getElementById('issuebyexpiryYEAR').value;
      const dateofentryintotheusaMONTH = document.getElementById('dateofentryintotheusaMONTH').value;
      const dateofentryintotheusaDAY = document.getElementById('dateofentryintotheusaDAY').value;
      const dateofentryintotheusaYEAR = document.getElementById('dateofentryintotheusaYEAR').value;
      const countryofcitizenship = document.getElementById('countryofcitizenship').value;
      const foreigntaxidnumber = document.getElementById('foreigntaxidnumber').value;
      const typeofusvisanumber = document.getElementById('typeofusvisanumber').value;
      const firstnameunderissued = document.getElementById('firstnameunderissued').value;
      const middlenameunderissued = document.getElementById('middlenameunderissued').value;
      const lastnameunderissued = document.getElementById('lastnameunderissued').value;

      const enteritinnumber1 = document.getElementById('enteritinnumber1').value;
      const enteritinnumber2 = document.getElementById('enteritinnumber2').value;
      const enteritinnumber3 = document.getElementById('enteritinnumber3').value;
      const enteritinnumber4 = document.getElementById('enteritinnumber4').value;
      const enteritinnumber5 = document.getElementById('enteritinnumber5').value;
      const enteritinnumber6 = document.getElementById('enteritinnumber6').value;
      const enteritinnumber7 = document.getElementById('enteritinnumber7').value;
      const enteritinnumber8 = document.getElementById('enteritinnumber8').value;
      const enteritinnumber9 = document.getElementById('enteritinnumber9').value;


      const enterirsnnumber1 = document.getElementById('enterirsnnumber1').value;
      const enterirsnnumber2 = document.getElementById('enterirsnnumber2').value;
      const enterirsnnumber3 = document.getElementById('enterirsnnumber3').value;
      const enterirsnnumber4 = document.getElementById('enterirsnnumber4').value;
      const enterirsnnumber5 = document.getElementById('enterirsnnumber5').value;
      const enterirsnnumber6 = document.getElementById('enterirsnnumber6').value;
      const enterirsnnumber7 = document.getElementById('enterirsnnumber7').value;
      const enterirsnnumber8 = document.getElementById('enterirsnnumber8').value;
      const enterirsnnumber9 = document.getElementById('enterirsnnumber9').value;
      
      
      const collegeuniversityfirstname = document.getElementById('collegeuniversityfirstname').value;
      const collegeuniversitycity = document.getElementById('collegeuniversitycity').value;
      const collegeuniversitylenghtstay = document.getElementById('collegeuniversitylenghtstay').value;
      
      const nameofdelegate = document.getElementById('nameofdelegate').value;
      const contactnumber = document.getElementById('contactnumber').value;
      const dateofapplicationMONTH = document.getElementById('dateofapplicationMONTH').value;
      const dateofapplicationDAY = document.getElementById('dateofapplicationDAY').value;
      const dateofapplicationYEAR = document.getElementById('dateofapplicationYEAR').value;

      const dateofagentMONTH = document.getElementById('dateofagentMONTH').value;
      const dateofagentDAY = document.getElementById('dateofagentDAY').value;
      const dateofagentYEAR = document.getElementById('dateofagentYEAR').value;
      const agentcontactnumber = document.getElementById('agentcontactnumber').value
      const agentfaxnumber = document.getElementById('agentfaxnumber').value
      const nameofagent = document.getElementById('nameofagent').value
      const agentcompanyname = document.getElementById('agentcompanyname').value
      const agentein = document.getElementById('agentein').value
      const agentptin = document.getElementById('agentptin').value
      const officecode = document.getElementById('officecode').value

      

      
    //basic information
      const firstname = document.getElementById('firstname').value;
      const middlename = document.getElementById('middlename').value;
      const lastname = document.getElementById('lastname').value;
      const firstnamebirth = document.getElementById('firstname_birth').value;
      const middlenamebirth = document.getElementById('middlename_birth').value;
      const lastnamebirth = document.getElementById('lastname_birth').value;
      const dobMONTH = document.getElementById('dobMONTH').value;
      const dobDAY = document.getElementById('dobDAY').value;
      const dobYEAR = document.getElementById('dobYEAR').value;
      const countrybirth = document.getElementById('cob').value;
      const birthcitystate = document.getElementById('birthcitystate').value;
      const gendertype = document.querySelector('input[name="genderType"]:checked').value;


      // Check if PDF document is loaded
      if (!pdfDoc) {
        const url = '/img/formw7.pdf';
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

      //Basic Information

      // Draw new text for firstname
      firstPage.drawText(`${firstname}`, {
        x: 113,
        y: 496, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });


      // Draw new text for middlename
      firstPage.drawText(`${middlename}`, {
        x: 278,
        y: 496, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for lastname
      firstPage.drawText(`${lastname}`, {
        x: 414,
        y: 496, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });

      // Draw new text for firstnamebirth
      firstPage.drawText(`${firstnamebirth}`, {
        x: 113,
        y: 473, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });


      // Draw new text for middlenamebirth
      firstPage.drawText(`${middlenamebirth}`, {
        x: 278,
        y: 473, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for lastnamebirth
      firstPage.drawText(`${lastnamebirth}`, {
        x: 414,
        y: 473, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });



      // Draw new text for dobMONTH
      firstPage.drawText(`${dobMONTH}`, {
        x: 135,
        y: 353, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });

      // Draw new text for dobDAY
      firstPage.drawText(`${dobDAY}`, {
        x: 155,
        y: 353, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });

      // Draw new text for dobYEAR
      firstPage.drawText(`${dobYEAR}`, {
        x: 173,
        y: 353, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });


      // Draw new text for countrybirth
      firstPage.drawText(`${countrybirth}`, {
        x: 234,
        y: 353, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });


      // Draw new text for birthcitystate
      firstPage.drawText(`${birthcitystate}`, {
        x: 342,
        y: 353, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS2
      });

      
      //OPTION A & F
      // Draw new text for treatycountryfora
      firstPage.drawText(`${treatycountryfora}`, {
        x: 230,
        y: 518, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for treatyarticlenumberfora
      firstPage.drawText(`${treatyarticlenumberfora}`, {
        x: 450,
        y: 518, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for treatycountryforf
      firstPage.drawText(`${treatycountryforf}`, {
        x: 230,
        y: 518, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for treatyarticlenumberforf
      firstPage.drawText(`${treatyarticlenumberforf}`, {
        x: 450,
        y: 518, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for spousessnitinresidentalienname
      firstPage.drawText(`${spousessnitinresidentalienname}`, {
        x: 526,
        y: 578, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for spousessnitinresidentalienumbber
      firstPage.drawText(`${spousessnitinresidentalienumbber}`, {
        x: 228,
        y: 565, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for relationshipresidentalien
      firstPage.drawText(`${relationshipresidentalien}`, {
        x: 479,
        y: 602, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for ssnitinresidentalienname
      firstPage.drawText(`${ssnitinresidentalienname}`, {
        x: 526,
        y: 578, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for ssnitinresidentalienumbber
      firstPage.drawText(`${ssnitinresidentalienumbber}`, {
        x: 228,
        y: 565, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for othersdefine
      firstPage.drawText(`${othersdefine}`, {
        x: 160,
        y: 530, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });
      

      // Draw new text for mailingstreet
      firstPage.drawText(`${mailingstreet}`, {
        x: 113,
        y: 448, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for mailingcitystate
      firstPage.drawText(`${mailingcitystate}`, {
        x: 113,
        y: 423, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });


      // Draw new text for foreignstreet
      firstPage.drawText(`${foreignstreet}`, {
        x: 113,
        y: 400, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for foreigncitystate
      firstPage.drawText(`${foreigncitystate}`, {
        x: 113,
        y: 376, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for mentionotherdocument
      firstPage.drawText(`${mentionotherdocument}`, {
        x: 276,
        y: 301, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });


      // Draw new text for issueby
      firstPage.drawText(`${issueby}`, {
        x: 168,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for issuebyno
      firstPage.drawText(`${issuebyno}`, {
        x: 245,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for issuebyexpiryMONTH
      firstPage.drawText(`${issuebyexpiryMONTH}`, {
        x: 370,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for issuebyexpiryDAY
      firstPage.drawText(`${issuebyexpiryDAY}`, {
        x: 385,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });
      // Draw new text for issuebyexpiryYEAR
      firstPage.drawText(`${issuebyexpiryYEAR}`, {
        x: 405,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for dateofentryintotheusa
      firstPage.drawText(`${dateofentryintotheusaMONTH}`, {
        x: 506,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for dateofentryintotheusa
      firstPage.drawText(`${dateofentryintotheusaDAY}`, {
        x: 526,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for dateofentryintotheusa
      firstPage.drawText(`${dateofentryintotheusaYEAR}`, {
        x: 546,
        y: 278, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for countryofcitizenship
      firstPage.drawText(`${countryofcitizenship}`, {
        x: 113,
        y: 327, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for foreigntaxidnumber
      firstPage.drawText(`${foreigntaxidnumber}`, {
        x: 234,
        y: 327, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for typeofusvisanumber
      firstPage.drawText(`${typeofusvisanumber}`, {
        x: 371,
        y: 327, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for firstnameunderissued
      firstPage.drawText(`${firstnameunderissued}`, {
        x: 253,
        y: 217, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for middlenameunderissued
      firstPage.drawText(`${middlenameunderissued}`, {
        x: 353,
        y: 217, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for lastnameunderissued
      firstPage.drawText(`${lastnameunderissued}`, {
        x: 448,
        y: 217, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for collegeuniversityfirstname
      firstPage.drawText(`${collegeuniversityfirstname}`, {
        x: 339,
        y: 194, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for collegeuniversitycity
      firstPage.drawText(`${collegeuniversitycity}`, {
        x: 182,
        y: 182, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for collegeuniversitylenghtstay
      firstPage.drawText(`${collegeuniversitylenghtstay}`, {
        x: 426,
        y: 182, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for dateofapplicationMONTH
      firstPage.drawText(`${dateofapplicationMONTH}`, {
        x: 357,
        y: 123, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });
      // Draw new text for dateofapplicationDAY
      firstPage.drawText(`${dateofapplicationDAY}`, {
        x: 377,
        y: 123, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });
      // Draw new text for dateofapplicationYEAR
      firstPage.drawText(`${dateofapplicationYEAR}`, {
        x: 402,
        y: 123, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for contactnumber
      firstPage.drawText(`${contactnumber}`, {
        x: 434,
        y: 123, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for nameofdelegate
      firstPage.drawText(`${nameofdelegate}`, {
        x: 129,
        y: 100, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber1
      firstPage.drawText(`${enteritinnumber1}`, {
        x: 247,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber2
      firstPage.drawText(`${enteritinnumber2}`, {
        x: 261,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber3
      firstPage.drawText(`${enteritinnumber3}`, {
        x: 276,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber4
      firstPage.drawText(`${enteritinnumber4}`, {
        x: 298,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber5
      firstPage.drawText(`${enteritinnumber5}`, {
        x: 312,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber6
      firstPage.drawText(`${enteritinnumber6}`, {
        x: 334,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber7
      firstPage.drawText(`${enteritinnumber7}`, {
        x: 348,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber8
      firstPage.drawText(`${enteritinnumber8}`, {
        x: 363,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enteritinnumber9
      firstPage.drawText(`${enteritinnumber9}`, {
        x: 377,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });


      // Draw new text for enterirsnnumber1
      firstPage.drawText(`${enterirsnnumber1}`, {
        x: 421,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber2
      firstPage.drawText(`${enterirsnnumber2}`, {
        x: 434,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber3
      firstPage.drawText(`${enterirsnnumber3}`, {
        x: 449,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber4
      firstPage.drawText(`${enterirsnnumber4}`, {
        x: 471,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber5
      firstPage.drawText(`${enterirsnnumber5}`, {
        x: 486,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber6
      firstPage.drawText(`${enterirsnnumber6}`, {
        x: 506,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber7
      firstPage.drawText(`${enterirsnnumber7}`, {
        x: 521,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber8
      firstPage.drawText(`${enterirsnnumber8}`, {
        x: 536,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });

      // Draw new text for enterirsnnumber9
      firstPage.drawText(`${enterirsnnumber9}`, {
        x: 550,
        y: 230, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });




      // Draw new text for dateofagentMONTH
      firstPage.drawText(`${dateofagentMONTH}`, {
        x: 357,
        y: 74, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });
      // Draw new text for dateofagentDAY
      firstPage.drawText(`${dateofagentDAY}`, {
        x: 377,
        y: 74, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });
      // Draw new text for dateofagentYEAR
      firstPage.drawText(`${dateofagentYEAR}`, {
        x: 402,
        y: 74, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });


      // Draw new text for agentcontactnumber
      firstPage.drawText(`${agentcontactnumber}`, {
        x: 461,
        y: 85, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for agentfaxnumber
      firstPage.drawText(`${agentfaxnumber}`, {
        x: 461,
        y: 74, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });




      // Draw new text for agentfaxnumber
      firstPage.drawText(`${nameofagent}`, {
        x: 129,
        y: 52, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for agentfaxnumber
      firstPage.drawText(`${agentcompanyname}`, {
        x: 299,
        y: 52, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for agentfaxnumber
      firstPage.drawText(`${agentein}`, {
        x: 422,
        y: 62, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for agentfaxnumber
      firstPage.drawText(`${agentptin}`, {
        x: 513,
        y: 62, // Adjusted position to be closer to the bottom
        size: 9, // Adjusted font size
        font: helveticaFont,
        color: rgb(0, 0, 0.3),
        letterSpacing: LS1, 
      });



      // Draw new text for agentfaxnumber
      firstPage.drawText(`${officecode}`, {
        x: 452,
        y: 52, // Adjusted position to be closer to the bottom
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

    let itnYCoordinate;
    if (itnType === "New ITN") {
      itnYCoordinate = 688;
    } else if (itnType === "Renew ITN") {
      itnYCoordinate = 678;
    }

    firstPage.drawImage(iconImage, {
      x: 455,
      y: itnYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });


    let reasonsubmitYCoordinate;
    if (reasonSubmit === "Nonresident alien to get an ITIN to claim tax treaty benefit") {
      reasonsubmitYCoordinate = 639;
    } else if (reasonSubmit === "Nonresident alien filing a U.S. federal tax return") {
      reasonsubmitYCoordinate = 627;
    } else if (reasonSubmit === "U.S. resident alien (based on days present in the United States) filing a U.S. federal tax return") {
      reasonsubmitYCoordinate = 615;
    } else if (reasonSubmit === "Dependent of U.S. citizen/resident alien") {
      reasonsubmitYCoordinate = 602;
    } else if (reasonSubmit === "Spouse of U.S. citizen/resident alien") {
      reasonsubmitYCoordinate = 578;
    } else if (reasonSubmit === "Nonresident alien student, professor, or researcher filing a U.S. federal tax return or claiming an exception") {
      reasonsubmitYCoordinate = 554;
    } else if (reasonSubmit === "Dependent/spouse of a nonresident alien holding a U.S. visa") {
      reasonsubmitYCoordinate = 542;
    } else if (reasonSubmit === "ReasonOther") {
      reasonsubmitYCoordinate = 531 ;
    }

    firstPage.drawImage(iconImage, {
      x: 53.5,
      y: reasonsubmitYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });

    let gendertypeYCoordinate;
    if (gendertype === "Male") {
      gendertypeYCoordinate = 363;
    } else if (gendertype === "Female") {
      gendertypeYCoordinate = 352;
    } 

    firstPage.drawImage(iconImage, {
      x: 493,
      y: gendertypeYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });


    let documenttypeYCoordinate;
    let documenttypeXCoordinate
    if (documenttype === "Passport") {
      documenttypeYCoordinate = 314;
      documenttypeXCoordinate = 333;
    } else if (documenttype === "Driver's license/Stat/ I.D") {
      documenttypeYCoordinate = 314;
      documenttypeXCoordinate = 399;
    } else if (documenttype === "USCIS documentation") {
      documenttypeYCoordinate = 302;
      documenttypeXCoordinate = 133;
    } else if (documenttype === "Other document") {
      documenttypeYCoordinate = 302;
      documenttypeXCoordinate = 241;
    }

    firstPage.drawImage(iconImage, {
      x: documenttypeXCoordinate,
      y: documenttypeYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });



    let previouslyreceiveditinYCoordinate;
    if (previouslyreceiveditin === "No/Dont Know") {
      previouslyreceiveditinYCoordinate = 255;
    } else if (previouslyreceiveditin === "Yes (Complete Line 6f)") {
      previouslyreceiveditinYCoordinate = 242;
    } 

    firstPage.drawImage(iconImage, {
      x: 131,
      y: previouslyreceiveditinYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });


    let delegaterelationshipYCoordinate;
    let delegaterelationshipXCoordinate;
    if (delegaterelationship === "Parent") {
      delegaterelationshipXCoordinate = 435;
      delegaterelationshipYCoordinate = 110;
    } else if (delegaterelationship === "Court-appointed guardian") {
      delegaterelationshipXCoordinate = 478;
      delegaterelationshipYCoordinate = 110;
    } else if (delegaterelationship === "Power of attorney") {
      delegaterelationshipXCoordinate = 436;
      delegaterelationshipYCoordinate = 98;
    } 

    firstPage.drawImage(iconImage, {
      x: delegaterelationshipXCoordinate,
      y: delegaterelationshipYCoordinate, // Adjusted position based on ITN type
      width: 6, // Adjusted width of the image
      height: 6, // Adjusted height of the image
    });

 

      // Update PDF preview
      const pdfBytes = await pdfDoc.save();
      const pdfPreview = document.getElementById('pdfPreviewitin');
      pdfPreview.src = URL.createObjectURL(new Blob([pdfBytes], { type: 'application/pdf' }));
 
      window.updatedPdfBytes = pdfBytes;

    }

    async function printPdf() {
      const pdfPreview = document.getElementById('pdfPreviewitin');

      pdfPreview.contentWindow.print();
    }
  
            
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
    
