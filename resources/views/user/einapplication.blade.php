<x-app-layout>
    <div class="loading" id="loading"><img decoding="async" src="https://promptfilings.com/wp-content/themes/astra/assets/img/loading.gif
      " alt="Application submitted" width="128"></div>
    
        <div  id="appdashboard">
        <!-- Banner -->
        <div class="topbar  w-full bg-primary text-white text-center p-2" style="z-index: 1000;">
            <strong>Exclusive Offer</strong> Get 10% off now, Apply for your ITIN or EIN with <a href="/"
            class="text-white">Prompt Filings</a>.
        </div>
    
        <!-- Dashboard -->
        <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
            <!-- Main content -->
            <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                <div class="mb-npx pb-4">
                    <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6 col-12 mb-4 mb-sm-0">
                        <!-- Title -->
                        <h5 class="mb-0 ls-tight"><small><a href="/" class="mb-3 d-block"><img decoding="async" src="https://promptfilings.com/wp-content/uploads/2024/03/logo-h-1.png" width="100" alt="Promptfilings"></a> Welcome to Promptfilings, <span id="userdetail"></span></small></h5>
                    </div>
                    <!-- Actions -->
                    <div class="col-sm-12 col-md-6 col-12 text-sm-end">
                      <a class="dashtab btn-sm btn btn-primary" href="/client">
                      <i class="bi bi-house"></i> Dashboard
                      </a>
                      <a class="itintab btn-sm btn btn-primary" href="/client/itin">
                      <i class="bi bi-card-text"></i> ITIN Application
                      </a>
                      <a class="eintab btn-sm btn btn-primary" href="/client/ein">
                      <i class="bi bi-card-list"></i> EIN Application
                      </a> 
                      <a class="eintab btn-sm btn btn-primary" href="/client/business-formation">
                        <i class="bi bi-card-list"></i> Business Formation
                        </a> 
                      <a href="#" class="btn-sm btn btn-primary" id="logout">
                      <i class="bi bi-box-arrow-left"></i> Logout
                      </a>
              </div>
                    </div>
                    </div>
                </div>
            </header>
            <!-- Main -->
            <main class="py-6 bg-surface-secondary">
                <div class="container-fluid py-5">
                    <div class="card shadow border-0 mb-7" id="eintabsection" >
                        <div class="content">
                            <div class="py-4 px-3 px-md-4">
                              <div class="mb-3 mb-md-4 d-flex justify-content-between">
                                <div class="h3 mb-0">Application for Employer Identification Number</div>
                              </div>
                              <div class="row my-5">
                                <div class="col-md-12">
                                      <div class="alert alert-warning d-block">
                                        <small class="d-block"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="You can apply for an EIN online (only for applicants in the U.S. or U.S. territories), by telephone (only for applicants outside of the U.S. or U.S. territories), by fax, or by mail, depending on how soon you need to use the EIN. Use only one method for each entity so you don’t receive more than one EIN for an entity."></i> Read before start the application.</small>
                                        <small class="d-block"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter “N/A” (not applicable) on all sections of each line that don't apply to you. Don't leave any section blank. For example, line 4 should have three separate entries."></i> Enter “N/A” (not applicable) on all sections of each line that don't apply to you..  </small>
                                        </div>
                                        </div>
                                        </div>
    <!--action="https://promptfilings.com/wp-content/themes/astra/assets/authnet/payment-ein-process.php"--> 
                                          <form id="einForm" class="row g-3 formsubmission needs-validation" novalidate="" enctype="application/x-www-form-urlencoded" method="POST" >
                                            <div class="col-md-12 col-xl-12 mb-3 mb-md-4"> 
                                             <div class="card h-100">
                                                <div class="card-header d-flex">
                                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Legal Details</h5>
                                              </div>
                                              <div class="card-body">
                                      <div class="media-body row">
                                        <div class="col-lg-6">
                                        <label for="legalname" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Legal name of entity (or individual) for whom the EIN is being requested. Enter the legal name of the entity (or individual) applying for the EIN exactly as it appears on the social security card, charter, or other applicable legal document. An entry is required."></i>  1) Legal name of entity<br><small>(or individual) for whom the EIN is being requested</small></label>
                                         <input type="text" id="legalname" class="form-control" name="legalname" required>
                                         </div>
                                         <div class="col-lg-6">
                                         <label for="tradename" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the trade name of the business if different from the legal name. The trade name is the 'doing business as' (DBA) name."></i> 2) Trade name of business<br><small>(if different from above name)</small></label>
                                         <input type="text" id="tradename" class="form-control" name="tradename" required>
                                        </div><div class="col-lg-6">
                                          <label for="email" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="For
                                           trusts, enter the email of the trustee. For estates, enter the email of
                                           the executor, administrator, personal representative, or other
                                           fiduciary. If the entity applying has a designated person to receive
                                           tax information, enter that person's email as the “care of” person.
                                           Enter the individual's email."></i> 2a) Trade email address of business </label>
                                          <input type="text" id="email" class="form-control" name="email" required>
                                         </div>
                                         <div class="col-lg-6">
                                          <label for="tradephone" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="For
                                           trusts, enter the phone of the trustee. For estates, enter the phone of
                                           the executor, administrator, personal representative, or other
                                           fiduciary. If the entity applying has a designated person to receive
                                           tax information, enter that person's phone as the “care of” person.
                                           Enter the individual's phone."></i> 2b) Trade phone number of business </label>
                                          <input type="text" id="tradephone" class="form-control" name="tradephone" required>
                                         </div><div class="col-lg-6">
                                         <label for="careofname" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="For
                                          trusts, enter the name of the trustee. For estates, enter the name of
                                          the executor, administrator, personal representative, or other
                                          fiduciary. If the entity applying has a designated person to receive
                                          tax information, enter that person's name as the “care of” person.
                                          Enter the individual's first name, middle initial, and last name."></i> 3) Executor, administrator, trustee, “care of” name</label>
                                         <input type="text" id="careofname" class="form-control" name="careofname" required>
                                        </div><div class="col-lg-6">&nbsp;</div><div class="col-lg-6">
                                         <label for="mailingaddress" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the mailing address for the
                                          entity's correspondence. If the entity's address is outside the United
                                          States or its territories, you must enter the city, province or state,
                                          postal code, and the name of the country. Don't abbreviate the
                                          country name. If line 3 is completed, enter the address for the
                                          executor, trustee, or “care of” person. Generally, this address will be
                                          used on all tax returns."></i> 4a) Mailing address</label>
                                         <input type="text" id="mailingaddress" class="form-control" name="mailingaddress" required>
                                        <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                         <label for="mailingaddressstate" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the mailing address for the
                                          entity's correspondence. If the entity's address is outside the United
                                          States or its territories, you must enter the city, province or state,
                                          postal code, and the name of the country. Don't abbreviate the
                                          country name. If line 3 is completed, enter the address for the
                                          executor, trustee, or “care of” person. Generally, this address will be
                                          used on all tax returns."></i> 4b) State</label>
                                         <select class="form-control" required="" name="mailingaddressstate"  id="mailingaddressstate">
                                            <option value="" disabled>Select ...</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North">North Carolina</option>
                                            <option value="North">North Dakota</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Rhode">Rhode Island</option>
                                            <option value="South">South Carolina</option>
                                            <option value="South">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                        </select>
                                         </div><div>
                                         <label for="mailingaddresscity" class="mid">City</label>
                                         <input type="text" id="mailingaddresscity" class="form-control" name="mailingaddresscity" required>
                                        </div><div>
                                         <label for="mailingaddresszip" class="mid">Zip</label>
                                         <input type="text" id="mailingaddresszip" class="form-control" name="mailingaddresszip" required>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                         <label for="mailingstreet" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Provide the entity's physical address
                                          only if different from its mailing address shown on lines 4a–4b. Don't
                                          enter a P.O. box number here. If the entity's address is outside the
                                          United States or its territories, you must enter the city, province or
                                          state, postal code, and the name of the country. Don't abbreviate the
                                          country name."></i> 5a) Street address (if different)</label>
                                         <input type="text" id="mailingstreet" class="form-control" name="mailingstreet" required>
                                        <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                         <label for="mailingaddressstateifdifferent" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Provide the entity's physical address
                                          only if different from its mailing address shown on lines 4a–4b. Don't
                                          enter a P.O. box number here. If the entity's address is outside the
                                          United States or its territories, you must enter the city, province or
                                          state, postal code, and the name of the country. Don't abbreviate the
                                          country name."></i> 5b)State</label>
                                         <select class="form-control" required="" name="mailingaddressstateifdifferent"  id="mailingaddressstateifdifferent">
                                            <option value="" disabled>Select ...</option>
                                            <option value="Alabama">Alabama</option>
                                            <option value="Alaska">Alaska</option>
                                            <option value="Arizona">Arizona</option>
                                            <option value="Arkansas">Arkansas</option>
                                            <option value="California">California</option>
                                            <option value="Colorado">Colorado</option>
                                            <option value="Connecticut">Connecticut</option>
                                            <option value="Delaware">Delaware</option>
                                            <option value="Florida">Florida</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Idaho">Idaho</option>
                                            <option value="Illinois">Illinois</option>
                                            <option value="Indiana">Indiana</option>
                                            <option value="Iowa">Iowa</option>
                                            <option value="Kansas">Kansas</option>
                                            <option value="Kentucky">Kentucky</option>
                                            <option value="Louisiana">Louisiana</option>
                                            <option value="Maine">Maine</option>
                                            <option value="Maryland">Maryland</option>
                                            <option value="Massachusetts">Massachusetts</option>
                                            <option value="Michigan">Michigan</option>
                                            <option value="Minnesota">Minnesota</option>
                                            <option value="Mississippi">Mississippi</option>
                                            <option value="Missouri">Missouri</option>
                                            <option value="Montana">Montana</option>
                                            <option value="Nebraska">Nebraska</option>
                                            <option value="Nevada">Nevada</option>
                                            <option value="New Hampshire">New Hampshire</option>
                                            <option value="New Jersey">New Jersey</option>
                                            <option value="New Mexico">New Mexico</option>
                                            <option value="New York">New York</option>
                                            <option value="North">North Carolina</option>
                                            <option value="North">North Dakota</option>
                                            <option value="Ohio">Ohio</option>
                                            <option value="Oklahoma">Oklahoma</option>
                                            <option value="Oregon">Oregon</option>
                                            <option value="Pennsylvania">Pennsylvania</option>
                                            <option value="Rhode">Rhode Island</option>
                                            <option value="South">South Carolina</option>
                                            <option value="South">South Dakota</option>
                                            <option value="Tennessee">Tennessee</option>
                                            <option value="Texas">Texas</option>
                                            <option value="Utah">Utah</option>
                                            <option value="Vermont">Vermont</option>
                                            <option value="Virginia">Virginia</option>
                                            <option value="Washington">Washington</option>
                                            <option value="West">West Virginia</option>
                                            <option value="Wisconsin">Wisconsin</option>
                                            <option value="Wyoming">Wyoming</option>
                                        </select>
                                        </div><div>
                                         <label for="mailingaddresscityifdifferent" class="mid">City</label>
                                         <input type="text" id="mailingaddresscityifdifferent" class="form-control" name="mailingaddresscityifdifferent" required>
                                        </div><div>
                                         <label for="mailingaddresszipifdifferent" class="mid">Zip</label>
                                         <input type="text" id="mailingaddresszipifdifferent" class="form-control" name="mailingaddresszipifdifferent" required>
                                        </div>
                                        </div></div><div class="col-lg-6">
                                         <label for="prinpiclebusiness" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the entity's primary physical location."></i> 6) County and state where principal business is located</label>
                                         <input type="text" id="prinpiclebusiness" class="form-control" name="prinpiclebusiness" required>
                                        </div><div class="col-lg-6">
                                         <label for="responsiblepartyname" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the full name (first
                                          name, middle initial, last name, if applicable) and SSN, ITIN, or EIN
                                          of the entity's responsible party."></i> 7a) Name of responsible party</label>
                                         <input type="text" id="responsiblepartyname" class="form-control" name="responsiblepartyname" required>
                                        </div>
                                        <div class="col-lg-6">
                                         <label for="ssnitineinumber" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Enter the full name (first name, middle initial, last name, if applicable) and SSN, ITIN, or EIN of the entity's responsible party."></i> 7b) SSN, ITIN, or EIN</label>
                                         <input type="text" id="ssnitineinumber" class="form-control" name="ssnitineinumber" required>
                                        </div>
                                        </div></div></div>
                                        <div class="card h-100 mt-5">
                                          <div class="card-header d-flex">
                                          <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">LLC Details</h5>
                                        </div>
                                        <div class="card-body">
                                <div class="media-body row">
                                        <div class="col-lg-12">
                                            <label for="applicationforllc" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="LLC is an entity organized under the laws of a state or foreign
                                              country as a limited liability company. For federal tax purposes, an
                                              LLC may be treated as a partnership or corporation or be
                                              disregarded as an entity separate from its owner."></i> 8a) Is this application for a limited liability company (LLC) (or a foreign equivalent)?</label>
                                            <div class="radiobox">
                                                <label>
                                                    <input type="radio" id="applicationforllcYes"
                                                        name="applicationforllc" value="Yes" class="radio"
                                                        required> Yes</label>
                                                <label>
                                                    <input type="radio" id="applicationforllcNo"
                                                        name="applicationforllc" value="No"
                                                        class="radio" required> No</label>
                                           </div>
                                           </div>
                                           <div class="col-lg-12 option-8B d-none">
                                            <label><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="LLC is an entity organized under the laws of a state or foreign
                                              country as a limited liability company. For federal tax purposes, an
                                              LLC may be treated as a partnership or corporation or be
                                              disregarded as an entity separate from its owner."></i> 8b) If 8a is “Yes,” enter the number of LLC members</label>
                                            <input type="text" id="applicationforllcyes" class="form-control" name="applicationforllcyes">
                                           </div>
                                           <div class="col-lg-12 option-8C d-none">
                                            <label for="llcorganized" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="LLC is an entity organized under the laws of a state or foreign
                                              country as a limited liability company. For federal tax purposes, an
                                              LLC may be treated as a partnership or corporation or be
                                              disregarded as an entity separate from its owner."></i> 8c) If 8a is “Yes,” was the LLC organized in the United States?</label>
                                            <div class="radiobox">
                                                <label>
                                                    <input type="radio" id="llcorganizedYes"
                                                        name="llcorganized" value="Yes" class="radio"
                                                        required> Yes</label>
                                                <label>
                                                    <input type="radio" id="llco rganizedNo"
                                                        name="llcorganized" value="No"
                                                        class="radio" required> No</label>
                                           </div>
                                           </div>
                                           </div></div></div>
                                           <div class="card h-100 mt-5">
                                            <div class="card-header d-flex">
                                            <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Entity Details</h5>
                                          </div>
                                          <div class="card-body">
                                  <div class="media-body row">
                                           <div class="col-lg-12">
                                            <label for="typeofentity" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Check the box that best describes the type of entity applying for the EIN. If you're an alien individual with an ITIN previously assigned to you, enter the ITIN in place of a requested SSN."></i> 9a) Type of entity (check only one box). Caution: If 8a is “Yes,” see the instructions for the correct box to check.</label>
                                            </div>
                                            <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitysoleprop"
                                              name="typeofentity"
                                              value="Sole proprietor"
                                              class="radio radioInput form-check-input" required>  Sole proprietor (SSN)</label>
                                              </div>
                                            <div class="col-lg-12 typeof-a d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentityssntxt" class="form-control" name="typeofentityssntxt"   placeholder="Enter (SSN)">
                                              </div>
                                             
                                            </div>
                                            </div>
    
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitypartnership"
                                              name="typeofentity"
                                              value="Partnership"
                                              class="radio radioInput form-check-input" required>  Partnership
                                          </label>
                                           </div>
    
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitycorporation"
                                              name="typeofentity"
                                              value="Corporation"
                                              class="radio radioInput form-check-input" required>   Corporation (enter form number to be filed) </label>
                                              </div>
                                              <div class="col-lg-12 typeof-b d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentitycorporationtxt" class="form-control" name="typeofentitycorporationtxt"   placeholder="Enter Corporation">
                                              </div>
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitypersonalservicecorporation"
                                              name="typeofentity"
                                              value="Personal service corporation"
                                              class="radio radioInput form-check-input" required>  Personal service corporation
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitychurch"
                                              name="typeofentity"
                                              value="Church or church-controlled organization"
                                              class="radio radioInput form-check-input" required>  Church or church-controlled organization
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitynonprofit"
                                              name="typeofentity"
                                              value="Other nonprofit organization"
                                              class="radio radioInput form-check-input" required>  Other nonprofit organization (specify)</label>
                                              </div>
                                        <div class="col-lg-12 typeof-c d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentitynonprofittxt" class="form-control" name="typeofentitynonprofittxt"   placeholder="Enter Other nonprofit organization">
                                              </div>
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityestatessn"
                                              name="typeofentity"
                                              value="Estate"
                                              class="radio radioInput form-check-input" required>  Estate (SSN of decedent) </label>
                                              </div>
                                              <div class="col-lg-12 typeof-d d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentityestatessntxt" class="form-control" name="typeofentityestatessntxt"  placeholder="Enter Estate (SSN of decedent)">
                                              </div>                                         
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityplanadmin"
                                              name="typeofentity"
                                              value="Plan administrator"
                                              class="radio radioInput form-check-input" required>  Plan administrator (TIN)</label>
                                              </div>
                                              <div class="col-lg-12 typeof-e d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentityplanadmintxt" class="form-control" name="typeofentityplanadmintxt"  placeholder="Enter Plan administrator (TIN)">
                                              </div>                                         
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitytrust"
                                              name="typeofentity"
                                              value="Trust"
                                              class="radio radioInput form-check-input" required>  Trust (TIN of grantor)</label>
                                              </div>
                                              <div class="col-lg-12 typeof-f d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentitytrustxt" class="form-control" name="typeofentitytrustxt"  placeholder="Enter Trust (TIN of grantor)">
                                              </div>
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitymilitary"
                                              name="typeofentity"
                                              value="Military"
                                              class="radio radioInput form-check-input" required>  Military/National Guard
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitystatelocal"
                                              name="typeofentity"
                                              value="local government"
                                              class="radio radioInput form-check-input" required>  State/local government
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityfarmerscorp"
                                              name="typeofentity"
                                              value="Farmers Cooperative"
                                              class="radio radioInput form-check-input" required> Farmers' cooperative
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityfederalgov"
                                              name="typeofentity"
                                              value="Federal government"
                                              class="radio radioInput form-check-input" required>  Federal government
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityremic"
                                              name="typeofentity"
                                              value="REMIC"
                                              class="radio radioInput form-check-input" required>  REMIC
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityindiantribal"
                                              name="typeofentity"
                                              value="Indian tribal governments"
                                              class="radio radioInput form-check-input" required>  Indian tribal governments/enterprises
                                          </label>
                                           </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentitygen"
                                              name="typeofentity"
                                              value="Group Exemption Number"
                                              class="radio radioInput form-check-input" required>  Group Exemption Number (GEN) if any</label>
                                              </div>
                                              <div class="col-lg-12 typeof-g d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentitygentxt" class="form-control" name="typeofentitygentxt"  placeholder="Enter Group Exemption Number (GEN) if any">
                                              </div>
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label class="form-check-label"><input type="radio" id="typeofentityother"
                                              name="typeofentity"
                                              value="Other"
                                              class="radio radioInput form-check-input" required>  Other </label>
                                              </div>
                                              <div class="col-lg-12 typeof-h d-none">
                                             <div class="row">
                                              <div class="col-12">
                                                <input type="text" id="typeofentityothertxt" class="form-control" name="typeofentityothertxt"  placeholder="Enter details">
                                              </div>
                                            </div>
                                            </div>
                                           <div class="col-lg-12">
                                            <label for="ifcorp" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Check the box that best describes the type of entity applying for the EIN. If you're an alien individual with an ITIN previously assigned to you, enter the ITIN in place of a requested SSN."></i> 9b) If a corporation, name the state or foreign country (if applicable) where incorporated</label>
                                            </div>
                                            <div class="col-lg-12">
                                             <div class="row">
                                              <div class="col-6">
                                                <input type="text" id="ifcorpstate" class="form-control" name="ifcorpstate"   placeholder="Enter State">
                                              </div>
                                              <div class="col-6">
                                                <input type="text" id="ifcorpforeigncountry" class="form-control" name="ifcorpforeigncountry"   placeholder="Enter Foreign country">
                                              </div>
                                            </div>
                                             </div>
    </div></div></div>
    <div class="card h-100 mt-5">
    <div class="card-header d-flex">
    <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Reason for applying</h5>
    </div>
    <div class="card-body">
    <div class="media-body row">
                                           <div class="col-lg-12">
                                            <label for="reasonforapplying" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Check only one box. Don't enter “N/A.” A selection is required"></i>  10) Choose Reason (check only one box)</label>
                                            </div>
                                            <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingstartnew"
                                                name="reasonforapplying"
                                                value="Started new business"
                                                class="radio radioInput form-check-input" required>  Started new business (specify type)</label>
                                                </div>
                                                <div class="col-lg-12 d-none reason-a">
                                              <div class="row">
                                                <div class="col-12">
                                                  <input type="text" id="reasonforapplyingstartnewtxt" class="form-control" name="reasonforapplyingstartnewtxt" placeholder="Enter New Business">
                                                </div>
                                              </div>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyinghired"
                                                name="reasonforapplying"
                                                value="Hired employees"
                                                class="radio radioInput form-check-input" required>  Hired employees (Check the box and see line 13.)
                                            </label>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingcompliancewithholdingregulations"
                                                name="reasonforapplying"
                                                value="Compliance with IRS withholding regulations"
                                                class="radio radioInput form-check-input" required>  Compliance with IRS withholding regulations
                                            </label>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingbankingpurpose"
                                                name="reasonforapplying"
                                                value="Banking purpose"
                                                class="radio radioInput form-check-input" required>  Banking purpose (specify purpose)</label>
                                            </div>
                                            <div class="col-lg-12 d-none reason-b">
                                              <div class="row">
                                                <div class="col-12">
                                                  <input type="text" id="reasonforapplyingbankingpurposetxt" class="form-control" name="reasonforapplyingbankingpurposetxt" placeholder="Enter Banking purpose">
                                                </div>
                                              </div>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingchangeorganization"
                                                name="reasonforapplying"
                                                value="Changed type of organization"
                                                class="radio radioInput form-check-input" required>  Changed type of organization (specify new type)</label>
                                                    </div>
                                                    <div class="col-lg-12 d-none reason-c"  >
                                              <div class="row">
                                                <div class="col-12">
                                                  <input type="text" id="reasonforapplyingchangeorganizationtxt" class="form-control" name="reasonforapplyingchangeorganizationtxt" placeholder="Enter New Type">
                                                </div>                                               
                                              </div>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingpurchasebusiness"
                                                name="reasonforapplying"
                                                value="Purchased going business"
                                                class="radio radioInput form-check-input" required>  Purchased going business
                                            </label>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingcreatedtrust"
                                                name="reasonforapplying"
                                                value="Created a trust"
                                                class="radio radioInput form-check-input" required>  Created a trust (specify type)</label>
                                            </div>
                                            <div class="col-lg-12 d-none reason-d">
                                              <div class="row">
                                                <div class="col-12">
                                                  <input type="text" id="reasonforapplyingcreatedtrustxt" class="form-control" name="reasonforapplyingcreatedtrustxt" placeholder="Enter trust details">
                                                </div>                                               
                                              </div>
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label"><input type="radio" id="reasonforapplyingpenionplan"
                                                name="reasonforapplying"
                                                value="Created a pension plan"
                                                class="radio radioInput form-check-input" required>  Created a pension plan (specify type)</label></div>
                                                <div class="col-lg-12 d-none reason-e">
                                              <div class="row">
                                                <div class="col-12">
                                                  <input type="text" id="reasonforapplyingpenionplantxt" class="form-control" name="reasonforapplyingpenionplantxt" placeholder="Enter pension plan details">
                                                </div>                                               
                                              </div>
                                             </div>
                                             <div class="col-lg-12">
                                                <label class="form-check-label"><input type="radio" id="reasonforapplyingother"
                                                  name="reasonforapplying"
                                                  value="other"
                                                  class="radio radioInput form-check-input" required>  Other (Specify)</label>
                                                </div>
                                                <div class="col-lg-12 d-none reason-f">
                                                <div class="row">
                                                  <div class="col-12">
                                                    <input type="text" id="reasonforapplyingothertxt" class="form-control" name="reasonforapplyingothertxt" placeholder="Enter pension plan details">
                                                  </div>                                               
                                                </div>
                                               </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label mid">11) Date business started or acquired (month, day, year).</label>
                                              <input type="text" id="datebusinessacquired" class="form-control" name="datebusinessacquired" placeholder="Enter Date (month, day, year)">
                                             </div>
                                             <div class="col-lg-12">
                                              <label class="form-check-label mid">12) Closing month of accounting year</label>
                                              <input type="text" id="closingmonthofaccounting" class="form-control" name="closingmonthofaccounting" placeholder="Enter Closing month of accounting year">
                                             </div>
                                             <div class="col-lg-12 mt-5">
                                              <label class="form-check-label mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Complete each box by entering the number (including zero
                                                (-0-)) of Agricultural, Household, or Other employees expected by
                                                the applicant in the next 12 months."></i> 13) Highest number of employees expected in the next 12 months (enter -0- if none). If no employees expected, skip line 14.</label>
                                              </div>
                                              <div class="col-lg-4">
                                                <label>Agricultural</label>
                                                <input type="text" id="highestnumberagriculture" class="form-control" name="highestnumberagriculture" placeholder="Enter -0- if none">
                                               </div>
                                               <div class="col-lg-4">
                                                <label>Household</label>
                                                <input type="text" id="highestnumberhousehold" class="form-control" name="highestnumberhousehold" placeholder="Enter -0- if none">
                                               </div>
                                               <div class="col-lg-4">
                                                <label>Other</label>
                                                <input type="text" id="highestnumberother" class="form-control" name="highestnumberother" placeholder="Enter -0- if none">
                                               </div>
                                               <div class="col-lg-12 my-5"><label class="form-check-label mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="If you expect your employment tax liability to be $1,000 or less in a full calendar year, you're eligible to file  Form 944 annually (once each year) instead of filing Form 941 quarterly (every 3 months). Your employment tax liability will generally be $1,000 or less if you expect to pay $5,000 or less in total wages subject to social security and Medicare taxes and federal income tax withholding. For employers in the U.S. territories, generally, if you pay $6,536 or less in wages subject to social security and Medicare taxes, you're likely to pay $1,000 or less in employment taxes. If you qualify and want to file Form 944 instead of Forms 941, check the box on line 14. If you don't check the box, then you must file Form 941 for every quarter."></i> 14) If you expect your employment tax liability to be $1,000 or less in a full calendar year and want to file Form 944 annually instead of Forms 941 quarterly</label>
                                                <label class="form-check-label" style="display: block;"><input type="checkbox" id="taxliabilty1k"
                                                  name="taxliabilty1k"
                                                  value="0"
                                                  class="form-check-input"><small>(Your employment tax liability will generally be $1,000 or less if you expect to pay $5,000 or less, $6,536 or less if you're in a U.S. territory, in total wages.)</small><p><small class="text-warning d-table mt-4">If you don't check this box, you must file Form 941 for every quarter.</small></p></label>
                                                </div>
                                                <div class="col-lg-12 mb-5">
                                                  <label class="form-check-label mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="If the business has employees, enter the date on which the business began to pay wages or annuities. For foreign applicants, this is the date you began to pay wages in the United States. If the business doesn't plan to have employees, enter “N/A."></i> 15) First date wages or annuities were paid (month, day, year). Note: If applicant is a withholding agent, enter date income will first be paid to nonresident alien (month, day, year)</label>
                                                  <input type="text" id="firstdatewage" class="form-control" name="firstdatewage" placeholder="Enter First date wages (month, day, year)">
                                                 </div>
                                                 <div class="col-lg-12">
                                                  <label for="principalactivity" class="mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Check the one box on line 16 that best describes the principal activity of the applicant's business. Check the Other box (and specify the applicant's principal activity) if none of the listed boxes applies. You must check a box."></i> 16) Check <b>one</b> box that best describes the principal activity of your business.</label>
                                                  </div>
                                                  <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityhealth"
                                                      name="principalactivity"
                                                      value="Health care & social assistance"
                                                      class="radio radioInput form-check-input" required>  Health care & social assistance</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivitywholesale"
                                                      name="principalactivity"
                                                      value="Wholesale agent broker"
                                                      class="radio radioInput form-check-input" required>  Wholesale—agent/broker</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityconstruction"
                                                      name="principalactivity"
                                                      value="Construction"
                                                      class="radio radioInput form-check-input" required>  Construction</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityrental"
                                                      name="principalactivity"
                                                      value="Rental & leasing"
                                                      class="radio radioInput form-check-input" required>  Rental & leasing</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivitytransportation"
                                                      name="principalactivity"
                                                      value="Transportation & warehousing"
                                                      class="radio radioInput form-check-input" required>  Transportation & warehousing</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityaccomodation"
                                                      name="principalactivity"
                                                      value="Accommodation & food service"
                                                      class="radio radioInput form-check-input" required>  Accommodation & food service</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivitywholealeother"
                                                      name="principalactivity"
                                                      value="Wholesale other"
                                                      class="radio radioInput form-check-input" required>  Wholesale—other</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityretail"
                                                      name="principalactivity"
                                                      value="Retail"
                                                      class="radio radioInput form-check-input" required>  Retail</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityrealestate"
                                                      name="principalactivity"
                                                      value="Real estate"
                                                      class="radio radioInput form-check-input" required>  Real estate</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivitymanufacturing"
                                                      name="principalactivity"
                                                      value="Manufacturing"
                                                      class="radio radioInput form-check-input" required>  Manufacturing</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityfinance"
                                                      name="principalactivity"
                                                      value="Finance & insurance"
                                                      class="radio radioInput form-check-input" required>  Finance & insurance</label>
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label"><input type="radio" id="principalactivityother"
                                                      name="principalactivity"
                                                      value="Other"
                                                      class="radio radioInput form-check-input" required>  Other (specify)</label>
                                                      </div>
                                                    <div class="col-lg-12 principle-a">
                                                       <input type="text" id="principalactivityother" class="form-control" name="principalactivityother" placeholder="Other (specify)">
                                                   </div>
                                                   <div class="col-lg-12 my-5">
                                                    <label class="form-check-label mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Use line 17 to describe the applicant's principal line of business in more detail. For example, if you checked the Construction box on line 16, enter additional detail such as “General contractor for residential buildings” on line 17. An entry is required. For mortgage REITs, indicate mortgage REIT; and for equity REITs, indicate what type of real property is the principal type (residential REIT, nonresidential REIT, miniwarehouse REIT, etc.)."></i> 17) Indicate principal line of merchandise sold, specific construction work done, products produced, or services provided.</label>
                                                    <input type="text" id="principalofmerchandise" class="form-control" name="principalofmerchandise" placeholder="Enter products or services provided">
                                                   </div>
                                                   <div class="col-lg-12">
                                                    <label class="form-check-label mid"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Check the applicable box to indicate whether or not the applicant entity applying for an EIN was issued one previously. "></i> 18) Has the applicant entity shown on line 1 ever applied for and received an EIN?</label>
                                                    </div>
                                                    <div class="col-lg-12">
                                                      <label class="form-check-label"><input type="radio" id="everappliedeinyes"
                                                        name="everappliedein"
                                                        value="Yes"
                                                        class="radio radioInput form-check-input" required>  Yes</label>
                                                     </div>
                                                     <div class="col-lg-12">
                                                      <label class="form-check-label"><input type="radio" id="everappliedeinno"
                                                        name="everappliedein"
                                                        value="No"
                                                        class="radio radioInput form-check-input" required>  No</label>
                                                     </div>
                                                     <div class="col-lg-12">
                                                      <label class="form-check-label">If “Yes,” write previous EIN here</label>
                                                      <input type="text" id="everappliedeintxt" class="form-control" name="everappliedeintxt" placeholder="Enter Date (month, day, year)">
                                                      </div>
                                                   </div></div></div>
                                                   <div class="card h-100 mt-5">
                                                    <div class="card-header d-flex">
                                                    <h5 class="h6 font-weight-semi-bold text-uppercase mb-0"><i class="bi bi-info-circle me-2 text-danger" data-bs-toggle="tooltip" data-placement="bottom" title="Complete this section only if you want to authorize the named individual to answer questions about the completion of Form SS-4 and receive the entity’s newly assigned EIN. You must complete the signature area for the authorization to be valid. The designee’s authority terminates at the time the EIN is assigned and released to the designee. EINs are released to authorized third-party designees by the method they used to obtain the EIN (online, telephone, or fax); however, the EIN notice will be mailed to the taxpayer."></i>  Third Party Designee</h5>
                                                  </div>
                                                  <div class="card-body">
                                                  <div class="media-body row">
                                                    <div class="col-lg-12"><label>Complete this section only if you want to authorize the named individual to receive the entity's EIN and answer questions about the completion of this form.</label></div>
                                                   <div class="col-lg-12">
                                                    <label for="designeename" class="mid">Designee's name</label>
                                                    <input type="text" id="designeename" class="form-control" name="designeename" required>
                                                   </div>
                                        <div class="col-lg-6">
                                          <label for="addresszipcode" class="mid">Address and ZIP code</label>
                                          <input type="text" id="addresszipcode" class="form-control" name="addresszipcode" required>
                                         </div>
                                        <div class="col-lg-12">
                                          <label for="underpenalties" class="mid">Under penalties of perjury, I declare that I have examined this application, and to the best of my knowledge and belief, it is true, correct, and complete.
                                            Name and title (type or print clearly)</label>
                                          <input type="text" id="underpenalties" class="form-control" name="underpenalties">
                                         </div>
                                        <div class="col-lg-6">
                                          <label for="desgineephonenumber" class="mid">Designee's telephone number (include area code)</label>
                                          <input type="text" id="desgineephonenumber" class="form-control" name="desgineephonenumber" required>
                                         </div>
                                         <div class="col-lg-6">
                                          <label for="desgineefaxnumber" class="mid">Designee's fax number</label>
                                          <input type="text" id="desgineefaxnumber" class="form-control" name="desgineefaxnumber" required>
                                         </div>
                                        <div class="col-lg-6">
                                         <label for="applicantphonenumber" class="mid">Applicant's telephone number</label>
                                         <input type="text" id="applicantphonenumber" class="form-control" name="applicantphonenumber" required>
                                        </div>
                                        <div class="col-lg-6">
                                         <label for="applicantfaxnumber" class="mid">Applicant's fax number</label>
                                         <input type="text" id="applicantfaxnumber" class="form-control" name="applicantfaxnumber" required>
                                        </div>
                                        </div></div></div>
                                        <div class="card h-100 mt-5 ordersummarybox" style="display: none;">
                                                <div class="card-header d-flex">
                                                    <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">Order Summary -
                                                        Fee Information</h5>
                                                </div>
                                                <div class="card-body">
                                                    <div class="media-body row" id="ordersummary">
                                                        <div class="col-lg-8 pt-5 pb-5">
                                                            <table cellpadding="5" cellspacing="0" width="100%">
                                                                <tr>
                                                                    <td>
                                                                        <p class="mb-3">PromptFiling Service Fee: </p>
                                                                    </td>
                                                                    <td>
                                                                        <p class="mb-3"><span
                                                                                id="pfservicefee">$69.00</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <th>
                                                                        <p class="mb-3">Grand Total Fee: </p>
                                                                    </th>
                                                                    <th>
                                                                        <p class="mb-3"><span
                                                                                id="totalpricing2">$0.00</span></p>
                                                                    </th>
                                                                </tr>
                                                            </table>
                                                            <div class="col-12"><small class="mb-5 container  mt-5 text-center">Important Note: If any  incorrect information is provided during the application process, you will need to restart and resubmit the entire application. It is essential to review all details carefully before submission to avoid any delays or complications.</small></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="alert alert-primary">
                                                                <h4>You'll Pay: <span id="totalpricing" name="totalpricing">$0.00</span></h4>
                                                                <div class="d-none"><input type="text" id="authpricing" name="authpricing" value="0" readonly></div>
                                                            </div>
                                                            <div class="col-md-12 m-0 p-5 row bg-white ">
                                                                <div id="message-div" class="col-md-12 mt-4 mb-4"
                                                                    style="display: none; color: red; font-weight: bold;">
                                                                </div>
                                                                <div class="my-2 col-md-12 p-0">
                                                                    <label for="card_name">Name on card:</label>
                                                                    <input type="text" class="form-control" id="card_name"
                                                                        placeholder="John Doe" name="card_name"
                                                                        maxlength="16" required>
                                                                </div>
                                                                <div class="my-2 col-md-12 p-0">
                                                                    <label for="card_address">Address</label>
                                                                    <input type="text" class="form-control" id="card_address"
                                                                        placeholder="Address" name="card_address"
                                                                        required>
                                                                </div>
    
                                                                <div class="my-2 col-md-12 p-0">
                                                                    <label for="card_city">City</label>
                                                                    <input type="text" class="form-control" id="card_city"
                                                                        placeholder="City" name="card_city"
                                                                        required>
                                                                </div>
    
                                                                <div class="my-2 col-md-12 p-0">
                                                                    <label for="card_state">State</label>
                                                                    <input type="text" class="form-control" id="card_state"
                                                                        placeholder="State" name="card_state"
                                                                        required>
                                                                </div>
    
                                                                <div class="my-2 col-md-12 p-0">
                                                                    <label for="card_zip">Zipcode</label>
                                                                    <input type="text" class="form-control" id="card_zip"
                                                                        placeholder="Zipcode" name="card_zip"
                                                                        required>
                                                                </div>
                                                                <div class="my-2 col-md-12 p-0">
                                                                    <label for="cardno">Card No:</label>
                                                                    <input type="text" class="form-control" id="card_number"
                                                                        placeholder="1111 1111 1111 1111" name="card_number"
                                                                        maxlength="16" required>
                                                                </div>
    
                                                                <div class="my-2 col-md-4 p-0">
                                                                    <label for="card_exp_month">Expiry Month:</label>
                                                                    <input type="text" class="form-control" id="card_exp_month"
                                                                        placeholder="MM" name="card_exp_month" maxlength="2"
                                                                        required>
                                                                </div>
                                                                <div class="my-2 col-md-4 p-0">
                                                                    <label for="card_exp_year">Expiry Year:</label>
                                                                    <input type="text" class="form-control" id="card_exp_year"
                                                                        placeholder="YYYY" name="card_exp_year"
                                                                        maxlength="4" required>
                                                                </div>
                                                                <div class="my-2 col-md-4 p-0">
                                                                    <label for="card_cvc">CVC Code:</label>
                                                                    <input type="text" class="form-control" id="card_cvc"
                                                                        placeholder="CVC Code" name="card_cvc"
                                                                        maxlength="3">
                                                                </div>
                                                                <div class="my-2 col-md-12 p-0"><img
                                                                        src="https://promptfilings.com/wp-content/themes/astra/assets/authnet/authorizemerchant.jpg"
                                                                        alt="Authorize.net Merchant">
                                                                </div>
                                                                <div class="col-lg-12 mt-5 d-flex align-items-center">
                                                                    <input type="checkbox" id="terms" name="terms"
                                                                        class="form-check-input me-2" required="">
                                                                    <label for="terms">I have read the <a
                                                                            href="https://promptfilings.com/terms-of-service/"
                                                                            target="_blank" class="mx-3">terms of
                                                                            services</a> and <a
                                                                            href="https://promptfilings.com/privacy-policy/"
                                                                            target="_blank" class="mx-3">privacy
                                                                            policy</a></label>
                                                                </div>
                                                                <div class="col-lg-12 mt-5 " id="spinner"
                                                                    style="display:none;">
                                                                    <img src="https://promptfilings.com/wp-content/themes/astra/assets/img/loading.gif"
                                                                        alt="Payment Process..." style="border:0!important"
                                                                        width="48">
                                                                </div>
                                                                <div class="col-lg-12 mt-3">
                                                                    <button type="submit" class="btn btn-primary"
                                                                        id="einformvalidate">Pay Now to Submit
                                                                        Application</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        <div class="col-md-12 mt-3"><small>Disclaimer: Please note that while we strive to provide accurate information, this sample application for an Employer Identification Number (EIN) is for illustrative purposes only and should not be construed as legal advice. The process and requirements for obtaining an EIN may vary depending on your specific circumstances and jurisdiction. It is recommended to consult with a qualified professional or refer to the official guidelines provided by the relevant tax authorities for accurate and personalized assistance with your EIN application. <a href="https://www.irs.gov/pub/irs-pdf/iss4.pdf" target="_blank"></a>https://www.irs.gov/pub/irs-pdf/iss4.pdf</small></div>
                        <div class="popupboxein">
                            <h4>Verify Business Entity Formation Application Before Proceeding or Submit
                                Now?</h4>
                            <span><button type="button" class="btn btn-primary" id="llcemailPdfBtn">Submit
                                    Application </button> <button type="button" class="btn btn-info"
                                    id="closepop">Reset</button></span>
                            <small class="mb-5 container mx-auto mt-5 text-center">Important Note: If any
                                incorrect information is provided during the application process, you will
                                need to restart and resubmit the entire application. It is essential to
                                review all details carefully before submission to avoid any delays or
                                complications.</small>
                        </div>
                        </div></form>
                        <div class="formpreview column col-12 d-none" >
                             <iframe class="pdf-preview" id="pdfPreviewein" src="https://promptfilings.com/wp-content/themes/astra/assets/forms/ss4.pdf" type="application/pdf" width="100%" height="600">
                            </iframe>
                          </div></div></div></div>
                </div>
            </main>
            </div>
        </div>
        </div>
        
    <script>
            document.getElementById('legalname').addEventListener('input', function() {
            var legalName = this.value.trim();  // Trim spaces from input
            var orderSummaryBox = document.querySelector('.ordersummarybox');
            var totalPricing = document.getElementById('totalpricing');
            var authPricing = document.getElementById('authpricing');
            var grandPricing = document.getElementById('totalpricing2');
            var fee = 69.00;  // The fee to add
        
            // Show the order summary box when typing
            orderSummaryBox.style.display = 'block';
        
            // Parse the current totalPricing value to a float, ignoring non-numeric characters
            var currentTotal = parseFloat(totalPricing.textContent.replace(/[^0-9.-]+/g,""));
        
            // Set the total to $69.00 if it's currently 0
            if (currentTotal === 0) {
            totalPricing.textContent = `$${fee.toFixed(2)}`;
            grandPricing.textContent = `$${fee.toFixed(2)}`;
    
            // Update the value of the authpricing input field to 69
            authPricing.value = fee.toFixed(2);
            }
        });
        
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
            //Render pdf
            // Step 1: Validate Form
    document.getElementById("einformvalidate").addEventListener("click", function(event) {
        var formein = document.getElementById("einForm");
        if (formein.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation(); 
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
            einupdatePdf();
            setTimeout(() => {
                loadingscreen.style.display = 'flex';
                var blobUrl = document.getElementById('pdfPreviewein').getAttribute('src');
    
                // Fetch PDF content as Blob
                fetch(blobUrl)
                    .then(function(response) {
                        return response.blob();
                    })
                    .then(function(blob) {
                        // Convert Blob to data URL
                        var reader = new FileReader();
                        reader.readAsDataURL(blob);
                        reader.onloadend = function() {
                            var pdfDataUrl = reader.result;
    
                            // Perform AJAX request to send the PDF via email
                            //var xhr = new XMLHttpRequest();
                            //xhr.open('POST', custom_script_vars.ajax_url, true);
                            //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
                            // Send the data in the format required by the server
                            //var params = 'action=einemail_pdf&pdfDataUrl=' + encodeURIComponent(pdfDataUrl);
                            //xhr.send(params);
                        };
                    })
                    .catch(function(error) {
                        console.error('Error fetching PDF content:', error);
                    });
            }, 2000); // Delay for loading screen
        }
    });
     
    
    
        const { PDFDocument, rgb, StandardFonts } = PDFLib;
    
        let pdfDoc;
        
        async function einupdatePdf() { 
          const applicationforllc = document.querySelector('input[name="applicationforllc"]:checked').value;
          const llcorganized = document.querySelector('input[name="llcorganized"]:checked').value;
          const typeofentity = document.querySelector('input[name="typeofentity"]:checked').value;
    
          const reasonforapplying = document.querySelector('input[name="reasonforapplying"]:checked').value;
          const principalactivity = document.querySelector('input[name="principalactivity"]:checked').value;
    
          const taxliabilty1k = document.querySelector('input[name="taxliabilty1k"]').value;
    
          const everappliedein = document.querySelector('input[name="everappliedein"]:checked').value;
           
        
        
         const legalname = document.getElementById('legalname').value; 
        const tradename = document.getElementById('tradename').value; 
        const careofname = document.getElementById('careofname').value; 
        const mailingaddress = document.getElementById('mailingaddress').value; 
        const mailingaddressstate = document.getElementById('mailingaddressstate').value; 
        const mailingaddresscity = document.getElementById('mailingaddresscity').value; 
        const mailingaddresszip = document.getElementById('mailingaddresszip').value; 
        const mailingstreet= document.getElementById('mailingstreet').value; 
        const mailingaddressstateifdifferent = document.getElementById('mailingaddressstateifdifferent').value; 
        const mailingaddresscityifdifferent = document.getElementById('mailingaddresscityifdifferent').value; 
        const mailingaddresszipifdifferent = document.getElementById('mailingaddresszipifdifferent').value; 
        const prinpiclebusiness = document.getElementById('prinpiclebusiness').value; 
        const responsiblepartyname = document.getElementById('responsiblepartyname').value; 
        const ssnitineinumber = document.getElementById('ssnitineinumber').value; 
        const applicationforllcnumber = document.getElementById('applicationforllcyes').value; 
    
        const typeofentityssntxt = document.getElementById('typeofentityssntxt').value; 
        const typeofentitycorporationtxt = document.getElementById('typeofentitycorporationtxt').value; 
        const typeofentitynonprofittxt = document.getElementById('typeofentitynonprofittxt').value; 
        const typeofentityestatessntxt = document.getElementById('typeofentityestatessntxt').value; 
        const typeofentityplanadmintxt = document.getElementById('typeofentityplanadmintxt').value; 
        const typeofentitytrustxt = document.getElementById('typeofentitytrustxt').value; 
        const typeofentitygentxt = document.getElementById('typeofentitygentxt').value; 
        const typeofentityothertxt = document.getElementById('typeofentityothertxt').value; 
        
        const ifcorpstate = document.getElementById('ifcorpstate').value; 
        const ifcorpforeigncountry = document.getElementById('ifcorpforeigncountry').value; 
    
    
        const reasonforapplyingstartnewtxt = document.getElementById('reasonforapplyingstartnewtxt').value; 
        const reasonforapplyingbankingpurposetxt = document.getElementById('reasonforapplyingbankingpurposetxt').value; 
        const reasonforapplyingchangeorganization = document.getElementById('reasonforapplyingchangeorganizationtxt').value; 
        const reasonforapplyingcreatedtrustxt = document.getElementById('reasonforapplyingcreatedtrustxt').value; 
        const reasonforapplyingpenionplantxt = document.getElementById('reasonforapplyingpenionplantxt').value; 
        const reasonforapplyingothertxt = document.getElementById('reasonforapplyingothertxt').value; 
    
    
        const datebusinessacquired = document.getElementById('datebusinessacquired').value; 
        const closingmonthofaccounting = document.getElementById('closingmonthofaccounting').value; 
        
        const highestnumberhousehold = document.getElementById('highestnumberhousehold').value; 
        const highestnumberother = document.getElementById('highestnumberother').value; 
        const highestnumberagriculture = document.getElementById('highestnumberagriculture').value; 
    
    
        const firstdatewage = document.getElementById('firstdatewage').value; 
        
        const principalactivityother = document.getElementById('principalactivityother').value; 
        
        const principalofmerchandise = document.getElementById('principalofmerchandise').value; 
        
        const everappliedeintxt = document.getElementById('everappliedeintxt').value; 
    
        const designeename = document.getElementById('designeename').value; 
        const addresszipcode = document.getElementById('addresszipcode').value; 
        const underpenalties = document.getElementById('underpenalties').value; 
        const desgineephonenumber = document.getElementById('desgineephonenumber').value; 
        const desgineefaxnumber = document.getElementById('desgineefaxnumber').value; 
    
    
        const applicantphonenumber = document.getElementById('applicantphonenumber').value; 
        const applicantfaxnumber = document.getElementById('applicantfaxnumber').value; 
      
           
        // Check if PDF document is loaded
        if (!pdfDoc) {
          const url = 'https://promptfilings.com/wp-content/themes/astra/assets/forms/ss4.pdf';
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
    
    
      
        // Draw new text for legalname
        firstPage.drawText(`${legalname}`, {
          x: 75,
          y: 689, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for tradename
        firstPage.drawText(`${tradename}`, {
          x: 75,
          y: 665, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for careofname
        firstPage.drawText(`${careofname}`, {
          x: 317,
          y: 665, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddress
        firstPage.drawText(`${mailingaddress}`, {
          x: 74,
          y: 641, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddressstate
        firstPage.drawText(`${mailingaddressstate}`, {
          x: 74,
          y: 617, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddresscity
        firstPage.drawText(`${mailingaddresscity}`, {
          x: 143,
          y: 617, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddresszip
        firstPage.drawText(`${mailingaddresszip}`, {
          x: 220,
          y: 617, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingstreet
        firstPage.drawText(`${mailingstreet}`, {
          x: 317,
          y: 641, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddressstateifdifferent
        firstPage.drawText(`${mailingaddressstateifdifferent}`, {
          x: 317,
          y: 617, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddresscityifdifferent
        firstPage.drawText(`${mailingaddresscityifdifferent}`, {
          x: 380,
          y: 617, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for mailingaddresszipifdifferent
        firstPage.drawText(`${mailingaddresszipifdifferent}`, {
          x: 460,
          y: 617, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for prinpiclebusiness
        firstPage.drawText(`${prinpiclebusiness}`, {
          x: 74,
          y: 594, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for responsiblepartyname
        firstPage.drawText(`${responsiblepartyname}`, {
          x: 74,
          y: 569, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for ssnitineinumber
        firstPage.drawText(`${ssnitineinumber}`, {
          x: 353,
          y: 569, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS5, 
        });
        // Draw new text for applicantphonenumber
        firstPage.drawText(`${applicantphonenumber}`, {
          x: 437,
          y: 64, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
        // Draw new text for applicantfaxnumber
        firstPage.drawText(`${applicantfaxnumber}`, {
          x: 437,
          y: 40, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
      
    
        // Draw new text for applicantfaxnumber
        firstPage.drawText(`${applicationforllcnumber}`, {
          x: 486,
          y: 544, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
      
    
    
        // Draw new text for applicantfaxnumber
        firstPage.drawText(`${typeofentityssntxt}`, {
          x: 162,
          y: 506, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${typeofentitycorporationtxt}`, {
                  x: 249,
                  y: 485, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
    
                      // Draw new text for applicantfaxnumber
        firstPage.drawText(`${typeofentitynonprofittxt}`, {
          x: 224,
          y: 446, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${typeofentityestatessntxt}`, {
                  x: 457,
                  y: 506, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
    
                      // Draw new text for applicantfaxnumber
        firstPage.drawText(`${typeofentityplanadmintxt}`, {
          x: 457,
          y: 494, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${typeofentitytrustxt}`, {
                  x: 457,
                  y: 482, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
    
                      // Draw new text for applicantfaxnumber
        firstPage.drawText(`${typeofentitygentxt}`, {
          x: 482,
          y: 434, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${typeofentityothertxt}`, {
                  x: 139,
                  y: 434, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
    
                      // Draw new text for applicantfaxnumber
        firstPage.drawText(`${ifcorpstate}`, {
          x: 277,
          y: 412, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${ifcorpforeigncountry}`, {
                  x: 407,
                  y: 412, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
    
                      // Draw new text for applicantfaxnumber
        firstPage.drawText(`${reasonforapplyingstartnewtxt}`, {
          x: 73,
          y: 374, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${reasonforapplyingbankingpurposetxt}`, {
                  x: 435,
                  y: 398, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
    
    
                      // Draw new text for applicantfaxnumber
        firstPage.drawText(`${reasonforapplyingchangeorganization}`, {
          x: 486,
          y: 385, // Adjusted position to be closer to the bottom
          size: 9, // Adjusted font size
          font: helveticaFont,
          color: rgb(0, 0, 0.3),
          letterSpacing: LS1, 
        });
    
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${reasonforapplyingcreatedtrustxt}`, {
                  x: 411,
                  y: 362, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${reasonforapplyingpenionplantxt}`, {
                  x: 441,
                  y: 350, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
    
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${reasonforapplyingothertxt}`, {
                  x: 140,
                  y: 338, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${datebusinessacquired}`, {
                  x: 58,
                  y: 315, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${closingmonthofaccounting}`, {
                  x: 483,
                  y: 327, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${highestnumberhousehold}`, {
                  x: 151,
                  y: 255, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${highestnumberother}`, {
                  x: 238,
                  y: 255, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${highestnumberagriculture}`, {
                  x: 61,
                  y: 255, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${firstdatewage}`, {
                  x: 406,
                  y: 231, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${principalactivityother}`, {
                  x: 397,
                  y: 194, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${principalofmerchandise}`, {
                  x: 58,
                  y: 170, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${everappliedeintxt}`, {
                  x: 186,
                  y: 146, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${designeename}`, {
                  x: 91,
                  y: 112, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${addresszipcode}`, {
                  x: 91,
                  y: 87, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${underpenalties}`, {
                  x: 159,
                  y: 62, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${desgineephonenumber}`, {
                  x: 435,
                  y: 112, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
      
    
              // Draw new text for applicantfaxnumber
              firstPage.drawText(`${desgineefaxnumber}`, {
                  x: 435,
                  y: 87, // Adjusted position to be closer to the bottom
                  size: 9, // Adjusted font size
                  font: helveticaFont,
                  color: rgb(0, 0, 0.3),
                  letterSpacing: LS1, 
                });
       
    
    
     
      const iconImageBytes = await fetch('/wp-content/themes/astra/assets/img/check2.png').then(res => res.arrayBuffer());
      const iconImage = await pdfDoc.embedPng(iconImageBytes);
      //const iconImage2 = await pdfDoc.embedPng(iconImageBytes);
      
      let applicationforllcYCoordinate;
      let applicationforllcXCoordinate;
      
      if (applicationforllc === "Yes") {
        applicationforllcXCoordinate = 256;
        applicationforllcYCoordinate = 544;
      } else if (applicationforllc === "No") {
        applicationforllcXCoordinate = 300;
        applicationforllcYCoordinate = 544;
      }
      
      firstPage.drawImage(iconImage, {
        x: applicationforllcXCoordinate,
        y: applicationforllcYCoordinate, // Adjusted position based on ITN type
        width: 6, // Adjusted width of the image
        height: 6, // Adjusted height of the image
      });
    
    
    
      let llcorganizedYCoordinate;
      let llcorganizedXCoordinate;
      
      if (llcorganized === "Yes") {
          llcorganizedXCoordinate = 493;
          llcorganizedYCoordinate = 530;
      } else if (llcorganized === "No") {
          llcorganizedXCoordinate = 544;
          llcorganizedYCoordinate = 530;
      }
      
      firstPage.drawImage(iconImage, {
        x: llcorganizedXCoordinate,
        y: llcorganizedYCoordinate, // Adjusted position based on ITN type
        width: 6, // Adjusted width of the image
        height: 6, // Adjusted height of the image
      });
      
    
      
    
      let taxliabilty1kYCoordinate;
      let taxliabilty1kXCoordinate;
      
      if (taxliabilty1k === "1") {
          taxliabilty1kXCoordinate = 419;
          taxliabilty1kYCoordinate = 255;
      }
    
      let typeofentityYCoordinate;
      let typeofentityXCoordinate;
      
      if (typeofentity === "Sole proprietor") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 507;
      } else if (typeofentity === "Partnership") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 495;
      } else if (typeofentity === "Corporation") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 482;
      } else if (typeofentity === "Personal service corporation") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 471;
      } else if (typeofentity === "Church or church-controlled organization") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 459;
      } else if (typeofentity === "Other nonprofit organization") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 447;
      } else if (typeofentity === "Estate") {
          typeofentityXCoordinate = 335;
          typeofentityYCoordinate = 507;
      } else if (typeofentity === "Plan administrator") {
          typeofentityXCoordinate = 335;
          typeofentityYCoordinate = 495;
      } else if (typeofentity === "Trust") {
          typeofentityXCoordinate = 335;
          typeofentityYCoordinate = 482;
      } else if (typeofentity === "Military") {
          typeofentityXCoordinate = 335;
          typeofentityYCoordinate = 471;
      } else if (typeofentity === "local government") {
          typeofentityXCoordinate = 444;
          typeofentityYCoordinate = 471;
      } else if (typeofentity === "Farmers Cooperative") {
          typeofentityXCoordinate = 335;
          typeofentityYCoordinate = 458;
      } else if (typeofentity === "Federal government") {
          typeofentityXCoordinate = 444;
          typeofentityYCoordinate = 458;
      } else if (typeofentity === "REMIC") {
          typeofentityXCoordinate = 335;
          typeofentityYCoordinate = 446;
      } else if (typeofentity === "Indian tribal governments") {
          typeofentityXCoordinate = 444;
          typeofentityYCoordinate = 446;
      } else if (typeofentity === "Other") {
          typeofentityXCoordinate = 62;
          typeofentityYCoordinate = 434;
      }  
      
      firstPage.drawImage(iconImage, {
        x: typeofentityXCoordinate,
        y: typeofentityYCoordinate, // Adjusted position based on ITN type
        width: 6, // Adjusted width of the image
        height: 6, // Adjusted height of the image
      });
    
    
      let reasonforapplyingYCoordinate;
      let reasonforapplyingXCoordinate;
      
      if (reasonforapplying === "Started new business") {
          reasonforapplyingXCoordinate = 62;
          reasonforapplyingYCoordinate = 387;
      } else if (reasonforapplying === "Hired employees") {
          reasonforapplyingXCoordinate = 62;
          reasonforapplyingYCoordinate = 361;
      } else if (reasonforapplying === "Compliance with IRS withholding regulations") {
          reasonforapplyingXCoordinate = 62;
          reasonforapplyingYCoordinate = 349;
      } else if (reasonforapplying === "Banking purpose") {
          reasonforapplyingXCoordinate = 277;
          reasonforapplyingYCoordinate = 398;
      } else if (reasonforapplying === "Changed type of organization") {
          reasonforapplyingXCoordinate = 277;
          reasonforapplyingYCoordinate = 386;
      } else if (reasonforapplying === "Purchased going business") {
          reasonforapplyingXCoordinate = 277;
          reasonforapplyingYCoordinate = 374;
      } else if (reasonforapplying === "Created a trust") {
          reasonforapplyingXCoordinate = 277;
          reasonforapplyingYCoordinate = 362;
      } else if (reasonforapplying === "Created a pension plan") {
          reasonforapplyingXCoordinate = 277;
          reasonforapplyingYCoordinate = 249;
      } else if (reasonforapplying === "other") {
          reasonforapplyingXCoordinate = 62;
          reasonforapplyingYCoordinate = 338;
      }  
      
      firstPage.drawImage(iconImage, {
        x: reasonforapplyingXCoordinate,
        y: reasonforapplyingYCoordinate, // Adjusted position based on ITN type
        width: 6, // Adjusted width of the image
        height: 6, // Adjusted height of the image
      });
      
    
    
    
      let principalactivityYCoordinate;
      let principalactivityXCoordinate;
      
      if (principalactivity === "Health care & social assistance") {
          principalactivityXCoordinate = 320;
          principalactivityYCoordinate = 219;
      } else if (principalactivity === "Wholesale agent broker") {
          principalactivityXCoordinate = 450;
          principalactivityYCoordinate = 219;
      } else if (principalactivity === "Construction") {
          principalactivityXCoordinate = 62;
          principalactivityYCoordinate = 206;
      } else if (principalactivity === "Rental & leasing") {
          principalactivityXCoordinate = 126;
          principalactivityYCoordinate = 206;
      } else if (principalactivity === "Transportation & warehousing") {
          principalactivityXCoordinate = 206;
          principalactivityYCoordinate = 206;
      } else if (principalactivity === "Accommodation & food service") {
          principalactivityXCoordinate = 320;
          principalactivityYCoordinate = 206;
      } else if (principalactivity === "Wholesale other") {
          principalactivityXCoordinate = 450;
          principalactivityYCoordinate = 206;
      } else if (principalactivity === "Retail") {
          principalactivityXCoordinate = 537;
          principalactivityYCoordinate = 206;
      } else if (principalactivity === "Real estate") {
          principalactivityXCoordinate = 62;
          principalactivityYCoordinate = 195;
      } else if (principalactivity === "Manufacturing") {
          principalactivityXCoordinate = 126;
          principalactivityYCoordinate = 195;
      } else if (principalactivity === "Finance & insurance") {
          principalactivityXCoordinate = 206;
          principalactivityYCoordinate = 195;
      } else if (principalactivity === "Other") {
          principalactivityXCoordinate = 320;
          principalactivityYCoordinate = 195;
      }  
      
      firstPage.drawImage(iconImage, {
        x: principalactivityXCoordinate,
        y: principalactivityYCoordinate, // Adjusted position based on ITN type
        width: 6, // Adjusted width of the image
        height: 6, // Adjusted height of the image
      });
      
    
      let everappliedeinYCoordinate;
      let everappliedeinXCoordinate;
      
      if (everappliedein === "Yes") {
          everappliedeinXCoordinate = 357;
          everappliedeinYCoordinate = 159;
      } else if (everappliedein === "No") {
          everappliedeinXCoordinate = 400;
          everappliedeinYCoordinate = 159;
      }  
      
      firstPage.drawImage(iconImage, {
        x: everappliedeinXCoordinate,
        y: everappliedeinYCoordinate, // Adjusted position based on ITN type
        width: 6, // Adjusted width of the image
        height: 6, // Adjusted height of the image
      });
      
       
      
        // Update #newitn with check icon if checkbox is checked
       // const newitn = document.getElementById('newitn');
       // newitn.innerHTML = checkbox ? '&#10003;' : '';
      
        // Update PDF preview
        const pdfBytes = await pdfDoc.save();
        const pdfPreview = document.getElementById('pdfPreviewein');
        pdfPreview.src = URL.createObjectURL(new Blob([pdfBytes], { type: 'application/pdf' }));
      
        // Enable download button
        //const downloadBtn = document.getElementById('downloadBtn');
        //downloadBtn.disabled = false;
      
        // Store updated PDF bytes
        window.updatedPdfBytes = pdfBytes;
      
      } 
    
        async function printPdfein() {
          const pdfPreview = document.getElementById('pdfPreviewein');
          pdfPreview.contentWindow.print();
        }
        
         
    
        
                                const loadingscreen = document.querySelector('.loading');
                                loadingscreen.style.display = 'flex';
                                setTimeout(() => {
                            loadingscreen.style.display = 'none';
                            }, 3000); // 3000 milliseconds = 3 seconds
                           
                              
                        
    
    </script>    
    </x-app-layout>
    