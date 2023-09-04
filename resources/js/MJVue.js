// Vue
window.Vue = require('vue');
import Vue from 'vue'
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll);

Vue.component('notificationclinic', require('./components/notificationClinic.vue?ver='+process.env.MIX_VER).default);
Vue.component('notificationclinicuser', require('./components/notificationClinicUser.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-appointment-clinic-chat', require('./components/appointmentMngt/partials/MJAppointmentClinicChatComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-applintment-regist', require('./components/appointmentMngt/partials/MJAppointmentRegistComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-applintment-list', require('./components/appointmentMngt/partials/MJAppointmentListComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-appointment-request-detail', require('./components/appointmentMngt/partials/MJAppointmentRequestDetailComponent.vue?ver='+process.env.MIX_VER).default);
// Vue.component('mj-applintment-to-list', require('./components/appointmentClinicListComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-appointment-patient-detail', require('./components/appointmentMngt/partials/MJAppointmentPatientDetailComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-appointment-meeting', require('./components/appointmentMngt/partials/MJAppointmentMeetingComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-appointment-doclist', require('./components/appointmentMngt/partials/MJAppointmentDocListComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-storage-uploadlist', require('./components/appointmentMngt/partials/MJStorageUploadListComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-clinic-edit', require('./components/admin/clinicInfoMngt/partials/MJEditComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-login-user-list', require('./components/admin/loginUserInfoMngt/partials/MJLoginUserListComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-login-user-detail', require('./components/admin/loginUserInfoMngt/partials/modal/MJModalLoginUserDetailComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-my-page-change-password', require('./components/myPageMngt/partials/MJMyPageChangePasswordComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-my-page-edit', require('./components/myPageMngt/partials/MJMyPageEditComponent.vue?ver='+process.env.MIX_VER).default);
Vue.component('mj-admin-home', require('./components/admin/home.vue?ver='+process.env.MIX_VER).default);

window.eventBus = new Vue();
var chatApp = null;
if($("div[id='chatApp']").length > 0) {
    chatApp = new Vue({
        el: '#chatApp'
    });
}

var notificationApp = null;
if($("div[id='notificationApp']").length > 0) {
    notificationApp = new Vue({
        el: '#notificationApp'
    });
}

var notificationClinicApp = null;
if($("div[id='notificationClinicApp']").length > 0) {
    notificationClinicApp = new Vue({
        el: '#notificationClinicApp'
    });
}

var notificationClinicAppUser = null;
if($("div[id='notificationClinicAppUser']").length > 0) {
    notificationClinicAppUser = new Vue({
        el: '#notificationClinicAppUser'
    });
}

window.MJAppointmentClinicChatApp = null;
if($("div[id='divAppointmentClinicChatApp']").length > 0) {
    window.MJAppointmentClinicChatApp = new Vue({
        el: '#divAppointmentClinicChatApp'
    });
}

window.MJVueAppointmentRegistApp = null;
if($("div[id='divAppointmentRegist']").length > 0) {
    window.MJVueAppointmentRegistApp = new Vue({
        el: '#divAppointmentRegist'
    });
}

window.MJVueAppointmentListApp = null;
if($("div[id='divAppointmentList']").length > 0) {
    window.MJVueAppointmentListApp = new Vue({
        el: '#divAppointmentList'
    });
}

window.MJVueAppointmentToListApp = null;
if($("div[id='divAppointmentToListMain']").length > 0) {
    window.MJVueAppointmentToListApp = new Vue({
        el: '#divAppointmentToListMain'
    });
}

// // 依頼情報詳細情報
window.MJAppointmentRequestDetailApp = null;
if($("div[id='divVueMJAppointmentRequestDetail']").length > 0) {
    window.MJAppointmentRequestDetailApp = new Vue({
        el: '#divVueMJAppointmentRequestDetail'
    });
}

// 患者詳細情報
window.MJAppointmentPatientDetailApp = null;
if($("div[id='divVueMJAppointmentPatientDetail']").length > 0) {
    window.MJAppointmentPatientDetailApp = new Vue({
        el: '#divVueMJAppointmentPatientDetail'
    });
}

// ＴＶ会議
window.MJAppointmentMeetingApp = null;
if($("div[id='divVueMJAppointmentMeeting']").length > 0) {
    window.MJAppointmentMeetingApp = new Vue({
        el: '#divVueMJAppointmentMeeting'
    });
}

// 予約ファイル一覧
window.MJAppointmentDocListSendDoneApp = null;
if($("div[id='divVueMJAppointmentDocListSendDone']").length > 0) {
    window.MJAppointmentDocListSendDoneApp = new Vue({
        el: '#divVueMJAppointmentDocListSendDone'
    });
}

// 予約アップロードリスト
window.MJStorageUploadListApp = null;
if($("div[id='divVueMJStorageUploadList']").length > 0) {
    window.MJStorageUploadListApp = new Vue({
        el: '#divVueMJStorageUploadList'
    });
}

//管理者専用基本情報
window.MJClinicEditApp = null;
if($("div[id='divVueMJClinicEdit']").length > 0) {
    window.MJClinicEditApp = new Vue({
        el: '#divVueMJClinicEdit'
    });
}

//管理者専用ユーザー情報
window.MJLoginUserListApp = null;
if($("div[id='divVueMJLoginUserList']").length > 0) {
    window.MJLoginUserListApp = new Vue({
        el: '#divVueMJLoginUserList'
    });
}

//管理者専用ユーザー情報modal
window.MJModalLoginUserDetailApp = null;
if($("div[id='divVueMJModalLoginUserDetail']").length > 0) {
    window.MJModalLoginUserDetailApp = new Vue({
        el: '#divVueMJModalLoginUserDetail'
    });
}

//mypage
window.MJMyPageChangePasswordApp = null;
if($("div[id='divVueMyPageChangePassword']").length > 0) {
    window.MJMyPageChangePasswordApp = new Vue({
        el: '#divVueMyPageChangePassword'
    });
}

window.MJMyPageEditApp = null;
if($("div[id='divVueMyPageEdit']").length > 0) {
    window.MJMyPageEditApp = new Vue({
        el: '#divVueMyPageEdit'
    });
}

//管理者専用ホーム
window.MJAdminHomeApp = null;
if($("div[id='divVueMJAdminHome']").length > 0) {
    window.MJAdminHomeApp = new Vue({
        el: '#divVueMJAdminHome'
    });
}