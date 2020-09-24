/**
 * Theme: Metrica - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Timeout Js
 */


$.sessionTimeout({
  message: 'Your session will be locked in 30 seconds.',
  keepAliveUrl: '../pages/pages-starter.html',
  logoutButton:'Logout',
  logoutUrl: '../authentication/auth-login.html',
  redirUrl: '../authentication/auth-lock-screen.html',
  warnAfter: 3000,
  redirAfter: 30000,
  countdownBar: true
});
