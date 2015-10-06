using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace _015F_CMPS411_Na.Services
{
    public interface IEmailSender
    {
        Task SendEmailAsync(string email, string subject, string message);
    }
}
