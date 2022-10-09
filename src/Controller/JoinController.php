<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Annotation\Route;


/**
 * JoinController
 *
 * This controller is responsible for redirecting the user to the projects Discord server.
 * It's acting as a custom invite link, so it's easier to remember and share with others.
 */
class JoinController extends AbstractController
{

    /**
     * Redirects visitor to the Discord Server, intended as custom short link for inviting players.
     *
     * This function matches domain.tld/join and domain.tld/discord
     *
     * @return RedirectResponse
     */
    #[Route(path: '/join', name: 'app_join', methods: ['GET'])]
    #[Route(path: '/discord', name: 'app_join_discord', methods: ['GET'])]
    public function index(): RedirectResponse
    {
        return new RedirectResponse(
            url: $this->getParameter(name: 'app.discord_invite'),
            status: 302
        );
    }
}
