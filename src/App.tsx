/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

export default function App() {
  return (
    <div className="min-h-screen bg-gray-900 text-white flex flex-col items-center justify-center p-4 text-center">
      <h1 className="text-3xl font-bold text-blue-500 mb-4">NOVANATION ESPORTS</h1>
      <p className="text-gray-300 max-w-md mb-6">
        The PHP files for the mobile-first tournament web app have been generated according to your strict requirements (No React, No AJAX, PHP/MySQL only).
      </p>
      <div className="bg-gray-800 p-6 rounded-xl border border-gray-700 text-left max-w-lg w-full">
        <h2 className="text-xl font-bold mb-3 text-yellow-400">How to use:</h2>
        <ol className="list-decimal list-inside space-y-2 text-gray-300">
          <li>Click the <strong>Export</strong> button in the top right corner.</li>
          <li>Download the project as a ZIP file.</li>
          <li>Extract the files to your local PHP server (e.g., XAMPP, WAMP, or MAMP) inside the <code>htdocs</code> or <code>www</code> folder.</li>
          <li>Create a MySQL database named <code>novanation_esports</code>.</li>
          <li>Navigate to <code>http://localhost/your-folder/install.php</code> to create the tables.</li>
          <li>Access the user panel at <code>index.php</code> and admin panel at <code>admin/login.php</code>.</li>
        </ol>
      </div>
    </div>
  );
}
