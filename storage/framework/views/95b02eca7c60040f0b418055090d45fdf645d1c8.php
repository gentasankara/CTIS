<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="/dashboard" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <?php if(auth()->user()->role == 'manager'): ?>
                <li><a href="/testCentre " class=""><i class="fa fa-hospital-o "></i> <span>Test Centre</span></a></li>
                <li><a href="/testKit" class=""><i class="fa fa-database"></i> <span>Manage Test Kit</span></a></li>
                <li><a href="/users " class=""><i class="fa fa-user"></i> <span>Manage Users</span></a></li>
                <li><a href="/testReport " class=""><i class="fa fa-line-chart"></i> <span>Test Report</span></a></li>

                <?php elseif(auth()->user()->role == 'tester'): ?>
                <li><a href="/testData " class=""><i class="fa fa-database"></i> <span>Test Data</span></a></li>
                <li><a href="/testReport " class=""><i class="fa fa-line-chart"></i> <span>Test Report</span></a></li>
                
                <?php elseif(auth()->user()->role == 'patient'): ?>
                <li><a href="/patientHistory " class=""><i class="fa fa-database"></i> <span>History Test</span></a></li>

               
               
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</div><?php /**PATH D:\SE\CTI\CTIS\resources\views/layouts/includes/_sidebar.blade.php ENDPATH**/ ?>