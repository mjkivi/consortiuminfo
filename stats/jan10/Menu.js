ContentsTree = new CTree("ContentsTree");
ContentsTree.bAutoClose = true;
ContentsTree.stTarget = "Main";
f1 = ContentsTree.AddNode(null, "General Statistics", "General_Statistics.htm");
ContentsTree.AddNode(f1, "Summary", "General_Statistics.htm#Summary");
f2 = ContentsTree.AddNode(null, "Activity Statistics", "Activity_Statistics.htm");
ContentsTree.AddNode(f2, "Daily", "Activity_Statistics.htm#Daily");
ContentsTree.AddNode(f2, "By Hour of Day", "Activity_Statistics.htm#By_Hour_of_Day");
ContentsTree.AddNode(f2, "By Day of Week", "Activity_Statistics.htm#By_Day_of_Week");
ContentsTree.AddNode(f2, "By Month", "Activity_Statistics.htm#By_Month");
f3 = ContentsTree.AddNode(null, "Access Statistics", "Access_Statistics.htm");
ContentsTree.AddNode(f3, "Pages", "Access_Statistics.htm#Pages");
ContentsTree.AddNode(f3, "Files", "Access_Statistics.htm#Files");
ContentsTree.AddNode(f3, "Images", "Access_Statistics.htm#Images");
ContentsTree.AddNode(f3, "Directories", "Access_Statistics.htm#Directories");
ContentsTree.AddNode(f3, "Pages per Visitor", "Access_Statistics.htm#Pages_per_Visitor");
ContentsTree.AddNode(f3, "Entry Pages", "Access_Statistics.htm#Entry_Pages");
ContentsTree.AddNode(f3, "Exit Pages", "Access_Statistics.htm#Exit_Pages");
ContentsTree.AddNode(f3, "Paths", "Access_Statistics.htm#Paths");
f4 = ContentsTree.AddNode(null, "Visitors", "Visitors.htm");
ContentsTree.AddNode(f4, "Hosts", "Visitors.htm#Hosts");
ContentsTree.AddNode(f4, "Top-Level Domains", "Visitors.htm#Top_Level_Domains");
ContentsTree.AddNode(f4, "Countries", "Visitors.htm#Countries");
ContentsTree.AddNode(f4, "US States", "Visitors.htm#US_States");
ContentsTree.AddNode(f4, "Cities", "Visitors.htm#Cities");
ContentsTree.AddNode(f4, "Organizations", "Visitors.htm#Organizations");
ContentsTree.AddNode(f4, "Authenticated Users", "Visitors.htm#Authenticated_Users");
f5 = ContentsTree.AddNode(null, "Referrers", "Referrers.htm");
ContentsTree.AddNode(f5, "Referring Sites", "Referrers.htm#Referring_Sites");
ContentsTree.AddNode(f5, "Referring URLs", "Referrers.htm#Referring_URLs");
ContentsTree.AddNode(f5, "Search Engines", "Referrers.htm#Search_Engines");
ContentsTree.AddNode(f5, "Engines and Phrases", "Referrers.htm#Engines_and_Phrases");
ContentsTree.AddNode(f5, "Search Phrases", "Referrers.htm#Search_Phrases");
ContentsTree.AddNode(f5, "Search Keywords", "Referrers.htm#Search_Keywords");
f6 = ContentsTree.AddNode(null, "Browsers", "Browsers.htm");
ContentsTree.AddNode(f6, "Browsers", "Browsers.htm#Browsers");
ContentsTree.AddNode(f6, "Firefox Versions", "Browsers.htm#Firefox_Versions");
ContentsTree.AddNode(f6, "Operating Systems", "Browsers.htm#Operating_Systems");
ContentsTree.AddNode(f6, "Spiders", "Browsers.htm#Spiders");
ContentsTree.AddNode(f6, "Spider Hosts", "Browsers.htm#Spider_Hosts");
f7 = ContentsTree.AddNode(null, "Errors", "Errors.htm");
ContentsTree.AddNode(f7, "Types", "Errors.htm#Types");
ContentsTree.AddNode(f7, "404 Errors", "Errors.htm#404_Errors");
ContentsTree.AddNode(f7, "Other Errors", "Errors.htm#Other_Errors");
f8 = ContentsTree.AddNode(null, "Tracked Files", "Tracked_Files.htm");
ContentsTree.AddNode(f8, "Summary", "Tracked_Files.htm#Summary");
ContentsTree.AddNode(f8, "/email/ci_email_gu.gif", "Tracked_Files.htm#_email_ci_email_gu_gif");
ContentsTree.AddNode(f8, "/email/ci_email_org.gif", "Tracked_Files.htm#_email_ci_email_org_gif");
ContentsTree.AddNode(f8, "/email/GUST0909.jpg", "Tracked_Files.htm#_email_GUST0909_jpg");
ContentsTree.AddNode(f8, "/email/GUST1109.jpg", "Tracked_Files.htm#_email_GUST1109_jpg");
document.write(ContentsTree.GetHTMLCode());