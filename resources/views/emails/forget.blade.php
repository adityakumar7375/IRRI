
<div style="max-width: 600px; margin: 0 auto; background: #ffffff; border: 1px solid #ddd; border-radius: 8px; overflow: hidden;">
    <!-- Header -->
    <div style="background: #007bff; color: #ffffff; text-align: center; padding: 10px 20px;">
        <h2 style="margin: 0;">Password Reset Notification</h2>
    </div>

    <!-- Body -->
    <div style="padding: 20px;">
        <p style="margin: 10px 0;">Hi {{ $name }},</p>
        <p style="margin: 10px 0;">Your password has been successfully reset. Below are your new login credentials:</p>
        
        <table style="width: 100%; border-collapse: collapse; margin: 20px 0;">
            <tr>
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left; background: #f8f9fa;">Field</th>
                <th style="border: 1px solid #ddd; padding: 10px; text-align: left; background: #f8f9fa;">Details</th>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 10px;">Username</td>
                <td style="border: 1px solid #ddd; padding: 10px;">{{ $email }}</td>
            </tr>
            <tr>
                <td style="border: 1px solid #ddd; padding: 10px;">New Password</td>
                <td style="border: 1px solid #ddd; padding: 10px;">{{ $new_password }}</td>
            </tr>
        </table>

        <p style="margin: 10px 0;">We recommend changing your password after logging in to ensure security.</p>
        <p style="margin: 10px 0;">If you did not request this password reset, please contact our support team immediately.</p>
    </div>

    <!-- Footer -->
    <div style="text-align: center; padding: 10px 20px; background: #f8f9fa; color: #6c757d;">
        <p style="margin: 0;">Thank you,<br>IRRI Team</p>
    </div>
</div>