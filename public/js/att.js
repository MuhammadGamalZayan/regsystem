
// Remove On Focus
var attendeeName = document.getElementById('name');
var description = document.getElementById('description');
var attendee = document.getElementById('attendee');
var email = document.getElementById('email');
var phone = document.getElementById('phone');
var affliation = document.getElementById('affliation');
attendeeName.onfocus = function() {
    'use strict';
    // Store Placeholder Attr In Backup Attr
    this.setAttribute('data-place', this.getAttribute('placeholder'));
    // Empty Placeholder Attribute
    this.setAttribute('placeholder', '');
};
attendeeName.onblur = function() {
    'use strict';
    // Get Placeholder Attr From Backup Att
    this.setAttribute('placeholder', this.getAttribute('data-place'));
    // Empty Backup Att
    this.setAttribute('data-place', '');
};

// ===================================================
description.onfocus = function() {
    'use strict';
    // Store Placeholder Attr In Backup Attr
    this.setAttribute('data-place', this.getAttribute('placeholder'));
    // Empty Placeholder Attribute
    this.setAttribute('placeholder', '');
};
description.onblur = function() {
    'use strict';
    // Get Placeholder Attr From Backup Att
    this.setAttribute('placeholder', this.getAttribute('data-place'));
    // Empty Backup Att
    this.setAttribute('data-place', '');
};
// ======================================================

attendee.onfocus = function() {
    'use strict';
    // Store Placeholder Attr In Backup Attr
    this.setAttribute('data-place', this.getAttribute('placeholder'));
    // Empty Placeholder Attribute
    this.setAttribute('placeholder', '');
};
attendee.onblur = function() {
    'use strict';
    // Get Placeholder Attr From Backup Att
    this.setAttribute('placeholder', this.getAttribute('data-place'));
    // Empty Backup Att
    this.setAttribute('data-place', '');
};
// ==========================================================
email.onfocus = function() {
    'use strict';
    // Store Placeholder Attr In Backup Attr
    this.setAttribute('data-place', this.getAttribute('placeholder'));
    // Empty Placeholder Attribute
    this.setAttribute('placeholder', '');
};
email.onblur = function() {
    'use strict';
    // Get Placeholder Attr From Backup Att
    this.setAttribute('placeholder', this.getAttribute('data-place'));
    // Empty Backup Att
    this.setAttribute('data-place', '');
};
// ================================================================
phone.onfocus = function() {
    'use strict';
    // Store Placeholder Attr In Backup Attr
    this.setAttribute('data-place', this.getAttribute('placeholder'));
    // Empty Placeholder Attribute
    this.setAttribute('placeholder', '');
};
phone.onblur = function() {
    'use strict';
    // Get Placeholder Attr From Backup Att
    this.setAttribute('placeholder', this.getAttribute('data-place'));
    // Empty Backup Att
    this.setAttribute('data-place', '');
};
// ====================================================================
affliation.onfocus = function() {
    'use strict';
    // Store Placeholder Attr In Backup Attr
    this.setAttribute('data-place', this.getAttribute('placeholder'));
    // Empty Placeholder Attribute
    this.setAttribute('placeholder', '');
};
affliation.onblur = function() {
    'use strict';
    // Get Placeholder Attr From Backup Att
    this.setAttribute('placeholder', this.getAttribute('data-place'));
    // Empty Backup Att
    this.setAttribute('data-place', '');
};